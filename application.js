/*
============================================================
  Module: Rotaract
============================================================
*/

(() => {

  const Rotaract = {

    name: 'Rotaract',

    /*
    ============================================================
      Models
    ============================================================
    */

    models: {},

    /*
    ============================================================
      Selectors
    ============================================================
    */

    selectors: {}

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

      s.navigation       = document.querySelector('.navigation');
      s.navigationToggle = document.querySelector('.navigation-toggle');

      _p.bind();

    },

    bind() {

      s.navigationToggle.addEventListener('click', (e) => {

        e.preventDefault();

        const element = e.target;

        if (s.navigation.classList.contains('navigation--open')) {

          s.navigation.classList.remove('navigation--open');

        } else {

          s.navigation.classList.add('navigation--open');

        }

      });

    }

  };

  // module aliases
  const that = Rotaract;
  const _p   = _private;
  const m    = that.models;
  const s    = that.selectors;

  // bind module to window
  window[that.name] = that;

  // initialize module
  _p.init();

})();
