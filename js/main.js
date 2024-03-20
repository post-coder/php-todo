const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.todoList = res.data;
        });

    },
}).mount('#app');