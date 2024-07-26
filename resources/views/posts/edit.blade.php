<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Edit</title>
</head>
<style>
    body {
    background-color: #fefae0;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 0;
    display: flex;
    flex-direction: column;
}
h1{
    font-size: 4.5rem;
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
    color: #181439;
    margin-top: 170px;
}
.navv {
    background-color: #181439;
    padding: 1rem;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; 
}

.navv a {
    float: right;
    color: #ffff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 1.2rem; 
    font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
    margin: 10px;
}

.btn2 {
    font-size: 1.2rem; 
    font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
    border-radius: 25px;
    padding: 5px 10px;
    background-color: #ffff;
}

.btn2:hover {
    background-color: #ffff;
    cursor: pointer;
}

.logo {
    margin-right: auto;
}

a.logo {
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
    font-size: 2rem;
    margin-left: 100px;
    transition: transform 0.3s ease;
}

.navbar {
    display: flex;
    justify-content: space-between; 
    align-items: center;
}
.title{
    margin-top: 20px;
    font-size: 5.5rem;
    padding: 50px;
    border-radius: 10px;
    border: 0px;
    color: #181439;
    width: 1200px;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
}

#editor {
    margin-top: 0px;
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
    font-size: 1.5rem;
    height: 300px;
    width: 1200px;
    border: 0px solid #ddd;
    border-radius: 10px;
    background-color: #fff;
    padding: 20px;
    text-align: center;
    
}
.edit{
margin-top: 50px;
background-color: white;
width: 1500px;
box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
border-radius: 10px;
text-align: center;
}
.btn1{
    margin-top: 5px;
    padding: 20px;
    width: 200px;
    font-size: 1rem;
    font-family: "Libre Baskerville", serif;
    font-weight: 100;
    font-style: normal;
   background-color: #181439;
   color: #fff;
   border-radius: 10px;
   margin-bottom: 25px;


}
.btn1:hover{
    cursor: pointer;
    background-color: #ffffff;
    color: #181439;
    transition: 0.3s ease;
    
}
.file{
    font-size: 4rem;
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
    color: #181439;
    margin-bottom:50px ;
   
}
.img{
    margin: 40px;
    
}
input[type="file"]{
    margin-top: 100px;
    font-size: 1.2rem;
    
    font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
    padding: 50px;

}
a.logo:hover{
    transform: scale(1.1);
}
.file-input {
    display: none; /* Hide the actual file input */
  }
.button {
  --main-focus: #ffffff;
  --font-color: white;
  --bg-color-sub: #dedede;
  --bg-color: #181439;
  --main-color: rgb(97, 74, 182);
  position: relative;
  width: 250px;
  height: 40px;
  cursor: pointer;
  display: flex;
  justify-content: center; /* Center content horizontally */
  align-items: center; /* Center content vertically */
  font-size: 1rem;
  font-family: "Libre Baskerville", serif;
  font-weight: 100;
  border: 2px solid var(--main-color);
  box-shadow: 4px 4px var(--main-color);
  background-color: var(--bg-color);
  border-radius: 10px;
  overflow: hidden;
  margin: auto;
  margin-top: 30px;
}

.button, .button__icon, .button__text {
  transition: all 0.3s;
}

.button .button__text {
  /* Remove transform to ensure text is centered */
  transform: none;
  color: var(--font-color);
  font-weight: 600;
  text-align: center; /* Center text */
}

.button .button__icon {
  position: absolute;
  right: 0;
  height: 100%;
  width: 39px;
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button .svg {
  width: 20px;
  fill: var(--main-color);
}

.button:hover {
  background: var(--bg-color);
}

.button:hover .button__text {
  color: transparent;
}

.button:hover .button__icon {
  width: 250px;
  transform: translateX(0);
}

.button:active {
  transform: translate(3px, 3px);
  box-shadow: 0px 0px var(--main-color);
}
.button1 {
  position: relative;
  padding: 12px 32px;
  font-size: 1em;
  font-weight: 700;
  text-transform: uppercase;
  color: #fff;
  background-color: #181439;
  border: none;
  border-radius: 50px;
  overflow: hidden;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  margin-top: 25px;
  font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
}

.button1:hover {
  transform: scale(1.05);
  color: #181439;
  box-shadow: 0 10px 20px #554ca5;
}

.button1:active {
  transform: scale(0.9);
}

.button1::before {
  content: "";
  position: absolute;
  top: 0;
  right: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, #ffffff, #ffffff);
  transition: all 0.4s ease-in-out;
  z-index: -1;
  border-radius: 50px;
}

.button1:hover::before {
  right: 0;
}

.Btn1 {
  border: none;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition-duration: .4s;
  cursor: pointer;
  position: relative;
  background-color: #ffffff;
  overflow: hidden;
  margin:-10px;
}

.svgIcon {
  transition-duration: .3s;
}

.svgIcon path {
  fill: #181439;
}

.text {
  position: absolute;
  color: #181439;
  width: 120px;
  font-weight: 600;
  opacity: 0;
  transition-duration: .4s;
  font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
}

.Btn1:hover {
  width: 110px;
  transition-duration: .4s;
  border-radius: 30px;
}

.Btn1:hover .text {
  opacity: 1;
  transition-duration: .4s;
}

.Btn1:hover .svgIcon {
  opacity: 0;
  transition-duration: .3s;
}
github-link {
    display: flex;
    align-items: center;
}

    </style>
<body>
    <div class="navv">
        <nav class="navbar"> 
            <a href="/" class="logo">Code it.</a>
            <div>
                <a href="https://github.com/YousefABDELRAZEK" class="github-link">
                    <button class="Btn1">
                        <svg class="svgIcon" viewBox="0 0 496 512" height="1.4em" xmlns="http://www.w3.org/2000/svg"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                        <span class="text">Github</span>
                      </button> </a>
                <a href="./posts/create" class="navbar-link">Write</a>
                <a href="./posts" class="navbar-link">Posts</a>
                    <a href="/" class="navbar-link">Home</a>
                  
        
            </div>
           
        </nav>
    </div>
    <h1>Write a Post</h1>
    <form method="POST" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="text" class="title" name="title"  value ="{{$post->title}}" placeholder="Title" required/>
    
        <div class="edit">
            <div id="editor" name="content"></div>
            <input type="hidden" id="content" value="{{$post->content}}" name="content"/>
            <script>
                var quill = new Quill('#editor', {
                    theme: 'snow',
                    placeholder: 'Description...'
                });
                quill.on('text-change', function() {
                    document.getElementById('content').value = quill.root.innerHTML;
                });
            </script>
        </div>
    
        <div class="img" style="margin-top: 30px">
            @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Blog Image" class="post-image"style="max-width: 180px; max-height: 180px; border-radius:10px; margin-left:20px;">

        @endif
        
        <label class="button" for="file-input">
            <span class="button__text">Update Image</span>
            <span class="button__icon">
              <svg class="svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg>
            </span>
            <input type="file" id="file-input" name="image" class="file-input" accept="image/*" onchange="updateFileName()"/>
          </label>
          
    </div>
    
    <button class="button1" type="submit">
       update
         </button>
    </form>
    
    

    
</body>
</html>