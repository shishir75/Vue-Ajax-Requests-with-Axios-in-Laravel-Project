new Vue({

    el: '#app',

    data: {
        skills: [],
    },

    mounted() {

        // make an ajax request for our server --- endpoint /skills

        axios.get('/skills')
            .then(response => this.skills = response.data);
    }

});
