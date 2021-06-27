<!DOCTYPE html>

<html>
<head>
  <title>Graphics task</title>
  <style>

body {
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 14px 26px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
  margin-right: 30px;
}

.dropdown .dropbtn {
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: olive;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}






    *, *::before, *::after {
  box-sizing: border-box;
  margin: 0;
}
body {
  min-height: 450px;
  height: 100vh;
  margin: 0;
  background-color: black;
  font-family: 'Nunito', serif;
}
button, input, select, textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
.todoList {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 320px;
  height: 500px;
  background: #F0FFFF;
  border-radius: 10px;
  box-shadow: 0 7px 30px rgba(62, 9, 11, .3);
}

.content {
  padding: 10px 20px;
}
.content form {
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
  padding: 0 10px 0 5px;
  border-bottom: 1px solid #8e979c;
}
.content form > * {
  background: transparent;
  border: none;
  height: 35px;
}
.content input[type='text'] {
  padding: 0 5px;
  font-weight: 700;
  font-size: 1.2rem;
  color: #6c717b;
  outline: none;
}
.content .input-buttons a{
  text-decoration: none;
}
.content .input-buttons i {
  margin-top: 5px;
  font-size: 20px;
  color: #8e979c;
}
.content ul.todos {
  margin-left: 0;
  padding: 0;
  letter-spacing: none;
  height: 220px;
  overflow: auto;
}
.content li {
  user-select: none;
  margin-bottom: 10px;
  display: flex;
  justify-content: space-between;
}
.content li i {
  color: #6c717b;
  font-size: 15px;
  cursor: pointer;
  padding: 5px 10px;
}
.content input[type="checkbox"] {
  display: none;
}
.content input[type="checkbox"] + label {
  color: #6c717b;
  font-size: 15px;
  cursor: pointer;
  position: relative;
  border-radius: 3px;
  display: inline-block;
  padding: 5px 5px 5px 30px;
}
.content input[type="checkbox"] + label:hover {
  color: #353a42;
  background-color: #f4f7fa;
}
.content input[type="checkbox"] + label span.check {
  left: 4px;
  top: 50%;
  position: absolute;
  transform: translatey(-50%);
  width: 18px;
  height: 18px;
  display: block;
  background: white;
  border-radius: 3px;
  border: 1px solid #b8bfcc;
  box-shadow: 0 2px 3px #f0f4f8;
}

.content input[type="checkbox"]:checked + label {
  color: #aeb7c6;
  text-decoration: line-through;
}
.content input[type="checkbox"]:checked + label span.check {
  background-color: transparent;
  border-color: transparent;
  box-shadow: none;
}




.content input[type="checkbox"] + label span.check::after {
  width: 100%;
  height: 100%;
  content: '';
  display: block;
  position: absolute;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 16px 16px;
  transform: scale(0);
  transition: transform 300ms cubic-bezier(.3, 0, 0, 1.5);
}
.content input[type="checkbox"]:checked + label span.check::after {
  transform: scale(1);
}
.content input[type="checkbox"] + label span.check::before {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  content: '';
  position: absolute;
  border-radius: 50%;
  background: #8798aa;
  opacity: .8;
  transform: scale(0);
}
.content input[type="checkbox"]:checked + label span.check::before {
  opacity: 0;
  transform: scale(1.3);
  transition: opacity 300ms cubic-bezier(0.2, 0, 0, 1), transform 400ms cubic-bezier(0.3, 0, 0, 1.4);
}

  </style>
</head>
<body>
<div class="navbar">
  <b><a href="index.php">CITRIX</a></b>
  <div class="dropdown">
    <button class="dropbtn"><b>Sectors</b> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="webdev.php">Web Development</a>
      <a href="graphics.php">Graphics</a>
      <a href="marketing.php">Marketing</a>
      <a href="rd.php">R & D</a>
    </div>
  </div> 
</div>


<div class="todoList">
  <center><h2 style="color: black;">Graphics Task</h2></center>
  <div class="content">
    <form class="add">
      <input type="text" name="add" placeholder="Add item...">
      <div class="input-buttons">
        <a href="#0" class="add-todo">
        </a>
      </div>
    </form>
    <ul class="todos">
      <li>
        <input type="checkbox" id="todo_1">
        <label for="todo_1">
          <span class="check"></span>
          <b>Sefat:</b>Demo template
        </label>
       
      </li>
      <li>
        <input type="checkbox" id="todo_2">
        <label for="todo_2">
          <span class="check"></span>
          <b>X:</b>Design
        </label>
       
      </li>
      <li>
        <input type="checkbox" id="todo_3">
        <label for="todo_3">
          <span class="check"></span>
          <b>Y:</b>Make a logo
        </label>
        
      </li>
      <li>
        <input type="checkbox" id="todo_4">
        <label for="todo_4">
          <span class="check"></span>
          <b>Z: </b> design a shirt
        </label>
       
      </li>
    </ul>
  </div>
  <center><h3><a href="logout.php">Logout</a></h3></center> 
</div>



<script>
  const submitForm = document.querySelector('.add');
const addButton = document.querySelector('.add-todo');
const todoList = document.querySelector('.todos');
const list = document.querySelectorAll('.todos li'); 

let listLenght = list.lenght;

const generateTempalate = (todo) => {
  
  const html = `<li>
                  <input type="checkbox" id="todo_${listLenght}">
                  <label for="todo_${listLenght}">
                    <span class="check"></span>
                    ${todo}
                  </label>
                  
                </li>`
  todoList.innerHTML += html;
};

function addTodos(e) {
  e.preventDefault();
  const todo = submitForm.add.value.trim();
  if (todo.length) {
    listLenght = listLenght + 1;
    generateTempalate(todo);
    submitForm.reset();
  }
}

submitForm.addEventListener('submit', addTodos);
addButton.addEventListener('click', addTodos);




</script>
</body>
</html>

