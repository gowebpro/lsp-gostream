/**
 * Прямой эфир
 *
 * @module ls/activity
 */

(function($) {
    "use strict";

    $.widget( "livestreet.lsGostream", $.livestreet.lsComponent, {
        /**
         * Дефолтные опции
         */
        options: {
            // Ссылки
            urls: {
            },

            // Селекторы
            selectors: {
            }
        },

        /**
         * Конструктор
         *
         * @constructor
         * @private
         */
        _create: function () {
            this._super();

        }

    });
})(jQuery);