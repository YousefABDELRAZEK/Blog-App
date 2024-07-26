<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <title>Posts</title>
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
    font-size: 5rem;
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
    color: #181439;
    margin-top: 155px;
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
.btn3{
    display: flex;
    justify-content: flex-start; 
  
   
}
.write{
    padding: 10px 20px;
    font-size: 1.5rem;
    cursor: pointer;
    width: 250px;
    border-radius: 20px;
    margin-top: -20px;
    background-color: white;
    color: #181439;
    font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
   
    border: 0px;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
    padding: 15px;


}
.write:hover{
    background-color: #181439;
    color: white;
    transition: 0.5s ease;
}

.container{
    display: flex;
    align-items: flex-start;
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
    margin-top: 50px;
    width: 90%;
    max-width: 1200px;
    transition: transform 0.3s ease;
    margin-left: auto;
    margin-right: auto;
}
.container:hover{
    transform: scale(1.01);

}
.post-image {
    width: 40%;
    object-fit: cover;
    background-position: center;
    margin:auto;
    border-radius: 30px;
    padding: 20px;
    
}

.post-content {
    padding: 35px;
    width: 800px;
    text-align: left;
}

.post-content h2 {
    margin-top: 0;
    font-size: 2rem;
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
}

.post-content p {
    margin: 10px 0;
    font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.read-more {
    padding: 10px 15px;
    background-color: #181439;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 1rem;
    margin: 10px;
}
.read-more:hover{
    background-color: #2f2969;
    transition: 0.3s ease;
}
.container:hover{
    background-color: #fefafa;
    transition: 0.3s ease;
}
.actions {
    display: flex;
    gap: 10px; 
    margin-top: 10px; 
}

.actions a, .actions form {
    margin: 0;
}
.Btn {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 100px;
  height: 40px;
  border: none;
  padding: 0px 20px;
  background-color: #181439;
  color: white;
  font-weight: 500;
  cursor: pointer;
  border-radius: 10px;
  box-shadow: 5px 5px 0px rgb(97, 74, 182);
  transition-duration: .3s;
  font-size: 1rem;
}

.svg {
  width: 13px;
  position: absolute;
  right: 0;
  margin-right: 20px;
  fill: white;
  transition-duration: .3s;
}

.Btn:hover {
  color: transparent;
}

.Btn:hover svg {
  right: 43%;
  margin: 0;
  padding: 0;
  border: none;
  transition-duration: .3s;
}

.Btn:active {
  transform: translate(3px , 3px);
  transition-duration: .3s;
  box-shadow: 2px 2px 0px rgb(97, 74, 182);
}
a.logo:hover{
    transform: scale(1.1);
}
.btn {
  border: none;
  width: 15em;
  height: 5em;
  border-radius: 3em;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  background: #181439;
  cursor: pointer;
  transition: all 450ms ease-in-out;
}

.sparkle {
  fill: #ffffff;
  transition: all 800ms ease;
}

.text {
  font-weight: 600;
  color: #ffffff;
  font-size: 1.5rem;
}

.btn:hover {
  background: linear-gradient(0deg,#A47CF3,#683FEA);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
  inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
  0px 0px 0px 4px rgba(255, 255, 255, 0.2),
  0px 0px 180px 0px #9917FF;
  transform: translateY(-2px);
}

.btn:hover .text {
  color: white;
}

.btn:hover .sparkle {
  fill: white;
  transform: scale(1.2);
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

.text1 {
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

.Btn1:hover .text1 {
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
                        <span class="text1">Github</span>
                      </button> </a>
                <a href="./posts/create" class="navbar-link">Write</a>
                <a href="./posts" class="navbar-link">Posts</a>
                    <a href="/" class="navbar-link">Home</a>
                  
        
            </div>
           
        </nav>
    </div>
    
    <div class="box">
        <h1>All Posts</h1>

    </div>
   
    <div class="btn3">
        <a href="{{route('posts.create')}}"> <button class="btn">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
            </svg>
        
            <span class="text">Create</span>
        </button></a>
    </div>
 
    @foreach($posts as $post)
  <div class="container">
    <img src="{{ asset('storage/' . $post->image) }}" alt="Blog Image" class="post-image" >
    <div class="post-content">
        <h2>{{$post->title}}</h2>
        <p> {!! $post->content !!}</p>
        <div class="actions">
            <a href="{{route('posts.edit',$post->id)}}">   <button class="Btn">Edit 
                <svg class="svg" viewBox="0 0 512 512">
                  <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
              </button></a>
          
          
            <form method="POST" action="{{route('posts.destroy',$post->id)}}">
             @csrf
             @method('DELETE')
             <button class="Btn" type="submit">Delete
                <svg class="svg" viewBox="0 0 448 512">
                  <path d="M135.2 16.5l7.5-16.5h162.7l7.5 16.5c3.3 7.4 10.5 12.5 18.5 12.5h48c13.3 0 24 10.7 24 24v16c0 13.3-10.7 24-24 24H32c-13.3 0-24-10.7-24-24v-16c0-13.3 10.7-24 24-24h48c8 0 15.2-5.1 18.5-12.5zm32.8 128h176c4.4 0 8 3.6 8 8v312c0 13.3-10.7 24-24 24H128c-13.3 0-24-10.7-24-24V152c0-4.4 3.6-8 8-8zm128 248V184c0-4.4-3.6-8-8-8s-8 3.6-8 8v208c0 4.4 3.6 8 8 8s8-3.6 8-8zm-96 0V184c0-4.4-3.6-8-8-8s-8 3.6-8 8v208c0 4.4 3.6 8 8 8s8-3.6 8-8z"></path>
                </svg>
              </button>
              
            </form>
         </div>
       </div>
        </div>
    
     
@endforeach

</body>
</html>
