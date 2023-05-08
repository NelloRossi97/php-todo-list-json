const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            apiUrl: 'server.php',
            todoItem : ''
        }
    },
    methods: {
        readList() {
            axios.get(this.apiUrl).then((res) => {
                this.todoList = res.data;
            });
        },
        updateList() {
            console.log(this.todoItem);
            const data = {
                todoItem: this.todoItem,
            };
            axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
                this.todoItem = '';
                // console.log((res.data));
            })
        }
    },
    mounted() {
        this.readList();
    }
}).mount('#app');