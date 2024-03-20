const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            
            newTodoText: '',
        }
    },

    methods: {

        addTodo() {
            
            axios.get('./server.php?newTodo=' + this.newTodoText).then(res => {
                console.log(res);
                this.todoList = res.data
            })

        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.todoList = res.data;
        });

    },
}).mount('#app');