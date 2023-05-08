<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP ToDo List JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div id="app" class="d-flex align-items-center vh-100">
        <div class="container text-center w-50 align-self-center bg-black rounded-5 p-5 text-white">
            <h1>To Do List</h1>
            <div class="input-group mb-3">
                <input 
                type="text" v-model="todoItem" class="form-control" placeholder="Aggiungi una cosa da fare..."
                aria-label=""  @keyup.enter="updateList">
                <button class="btn btn-secondary" @click="updateList">Aggiungi</button>
            </div>
            <div class="d-flex justify-content-center">
                <ul class="list-unstyled">
                    <li v-for="(todo,index) in todoList" :key="index" class="mb-3 d-flex justify-content-between align-items-center ps-3 rounded-2">{{todo}} <button class="btn btn-danger ms-5"> <i class="fa-solid fa-trash"></i> </button> </li>
                </ul>
            </div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
  </body>
</html>