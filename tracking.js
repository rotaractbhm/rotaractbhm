/*
============================================================
  Module: Global Tracking
============================================================
*/

(() => {

  const Tracking = {

    name: 'Tracking',

    /*
    ============================================================
      Models
    ============================================================
    */

    models: {

      g : System.models.global,
      b : System.models.browser,
      s : System.models.scope,
      f : System.models.fravert,
      m : System.models.member,
      d : System.models.dependencies,
      a : System.models.apis,
      c : System.models.constants

    },

    /*
    ============================================================
      Selectors
    ============================================================
    */

    selectors: {

      g : System.selectors

    }

    /*
    ============================================================
      Public Methods
    ============================================================
    */

  };

  /*
  ============================================================
    Private Methods
  ============================================================
  */

  const _private = {

    init() {

      System.debug(that.name, 'init', 'called.');

      if (m.g.track) {

        _p.bindTrackingListeners();

      }

    },

    bindTrackingListeners() {

      System.debug(that.name, 'bindTrackingListeners', 'called.');

      s.g.body.addEventListener(m.b.event.click, (e) => {

        const element = e.target;

        if (element.matches('.js-track-event')) {

          const { gtmCategory, gtmAction, gtmLabel, gtmValue } = element.dataset;
          const eventIsValid = ((ga) && (gtmCategory) && (gtmAction));

          if (eventIsValid) {

            System.debug(that.name, 'bindTrackingListeners', 'Tracked event.');

            ga('send', 'event', gtmCategory, gtmAction, gtmLabel, gtmValue);

          } else {

            System.debug(that.name, 'bindTrackingListeners', 'Tracking event is invalid.', 'error');

          }

        }

      });

    }

  };

  // module aliases
  const that = Tracking;
  const _p   = _private;
  const m    = that.models;
  const s    = that.selectors;

  // bind module to window
  window[that.name] = that;

  // initialize module
  _p.init();

})();
