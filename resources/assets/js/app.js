
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*const app = new Vue({
    el: '#app'
});
*/



var moodApp ={

    addCard: function () {
        $('#addCardForm .click').click(function(e){
            e.preventDefault();

            var $data;

            var url = $(this).parent('form').attr('action');
            var detailProduct = url.split('/');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                },
                url: url,
                type: 'POST',
                data: {
                  'category': detailProduct[1],
                  'product' : detailProduct[2]
                },
                success: function(result){
                    if (result){
                        $('#responseToAddCard').attr('class', result.success);
                        $('#responseToAddCard').html(result.message);
                    }
                }
            });

        });
    },

    init:function () {
        this.addCard();
    }
};

$(
    function () {
        moodApp.init();
    }
);


