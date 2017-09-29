$formVue = new Vue({
    el: '.form-inline',
    data: {
        form: {
            name: '',
            combination_code: '',
            color: '',
            color_code: '',
            size: '',
            size_code: ''
        }
    },
    methods: {
        submitCreate: function (url) {
            alert('submitting');
            axios.post(url, this.form).then(function (resp) {
                console.log(resp);
            }).catch(function (err) {
                console.log(err);
            });
        }
    }
});