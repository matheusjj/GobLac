/**
 * @file
 * Add missing classes using an API endpoint.
 */

(function (Drupal) {

  'use strict';

  function getTailwindStyleRules(class_names) {
    let selectors_map = {};    
    let rules = {};
    const selectors = class_names.map(function(class_name) {
      let selector = '.' + class_name
        .replace(':', '\\:')
        .replace('[', '\\[')
        .replace(']', '\\]')
        .replace('.', '\\.')
        .replace('/', '\\/');
      selectors_map[selector] = class_name;
      rules[class_name] = [];
      return selector;
    });

    // Stylesheet inserted by Tailwind is the last one (no name unfortunately)
    // so we can start from the end. If we have a match, no point searching in
    // other stylesheets as Tailwind CDN js adds only one.
    let found = false; 
    for (let i = document.styleSheets.length - 1; i !== 0; i--) {
      let styleSheet = document.styleSheets[i];
      if (styleSheet.href !== null) {
        continue;
      }
      for (let j = 0; j < styleSheet.cssRules.length; j++) {
        if (styleSheet.cssRules[j].constructor.name === 'CSSMediaRule') {
          for (let k = 0; k < styleSheet.cssRules[j].cssRules.length; k++) {
            if (selectors.includes(styleSheet.cssRules[j].cssRules[k].selectorText)) {
              found = true;
              let key = selectors_map[styleSheet.cssRules[j].cssRules[k].selectorText];
              rules[key].push({
                rule: styleSheet.cssRules[j].cssRules[k].cssText,
                atrule: '@media ' + styleSheet.cssRules[j].conditionText + ' {\n}'
              });
            }
          }
        }
        else if (styleSheet.cssRules[j].constructor.name === 'CSSStyleRule') {
          if (selectors.includes(styleSheet.cssRules[j].selectorText)) {
            found = true;
            let key = selectors_map[styleSheet.cssRules[j].selectorText];
            rules[key].push({
              rule: styleSheet.cssRules[j].cssText
            });
          }
        }
        
        // We break only after the entire stylesheet has been searched
        // as there can be multiple rules.
        if (found) {
          break;
        }
      }
    }

    return rules;
  }

  Drupal.behaviors.rule_finder =  {
    // We want to run this once only when the main document is loaded.
    executed: false,
    attach: function (context, settings) {
      if (this.executed) {
        return;
      }
      // Wait 2 seconds before executing this to make sure Tailwind CDN
      // added the css rules.
      setTimeout(function() {
        if (typeof(tailwindcss_utility_missing_classes) !== 'undefined' && tailwindcss_utility_missing_classes.length) {
          const rules = getTailwindStyleRules(tailwindcss_utility_missing_classes);

          // Save found rules.
          let target_uri = drupalSettings.path.baseUrl + drupalSettings.path.pathPrefix + 'tailwindcss-utility/add-rules-api';
          var xhr = new XMLHttpRequest();
          xhr.open("POST", target_uri, true);
          xhr.setRequestHeader("Content-Type", "application/json");
          xhr.send(JSON.stringify(rules));
        }
      }, 2000);
      this.executed = true;
    }
  }

})(Drupal);
