<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code it.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    body {
    background-color: #fefae0;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
}

h1 {
    font-family: "Libre Baskerville", serif;
    font-weight: 700;
    font-style: normal;
    font-size: 4.5rem;
    margin-bottom: 20px;
    color: #181439;
}

.container {
    justify-content: center;
    align-items: center;
    text-align: center;
    display: flex;
    flex-direction: column;
    margin-bottom: 20px; 
}

h5 {
    font-family: "Libre Baskerville", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 1.5rem;
    margin-bottom: 20px; 
    color: #181439;
}

.btn {
    font-size: 1.5rem;
    font-family: "Libre Baskerville", serif;
    background-color: white;
    padding: 20px;
    border: 2px solid #3e4a61;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
    border-radius: 50px;
    color: #181439;
    width: 300px;
    margin-top: 20px; 
}

.btn:hover {
    background-color: #181439;
    color: white;
    transition: 0.5s ease;
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
a.logo:hover{
    transform: scale(1.1);
}

.navbar {
    display: flex;
    justify-content: space-between; 
    align-items: center;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #181439;
    color: #fefae0;
    text-align: center;
    font-family: "Libre Baskerville", serif;
    font-weight: 200;
    font-style: normal;
}

.footer a {
    color: #fefae0;
    text-decoration: double;
}

.footer a:hover {
    color: rgb(56, 56, 218);
}
.cssbuttons-io-button {
  background: #181439;
  margin-top:12px; 
  color: white;
 
  padding: 0.35em;
  padding-left: 1.2em;
  font-size: 1.5rem;
  font-weight: 500;
  border-radius: 1em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em #6e60e7;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3.3em;
  font-family: "Libre Baskerville", serif;
  text-decoration: none;
}

.cssbuttons-io-button .icon {
  background: white;
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em #181439;
  right: 0.3em;
  transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #181439;
}

.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.95);
}
.Btn {
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

.Btn:hover {
  width: 110px;
  transition-duration: .4s;
  border-radius: 30px;
}

.Btn:hover .text {
  opacity: 1;
  transition-duration: .4s;
}

.Btn:hover .svgIcon {
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
                <button class="Btn">
                    <svg class="svgIcon" viewBox="0 0 496 512" height="1.4em" xmlns="http://www.w3.org/2000/svg"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                    <span class="text">Github</span>
                  </button> </a>
            <a href="./posts/create" class="navbar-link">Write</a>
            <a href="./posts" class="navbar-link">Posts</a>
                <a href="/" class="navbar-link">Home</a>
              
    
        </div>
       
    </nav>
</div>

  
    <div class="container">
        <h1>Programmers<br>
             stories & ideas</h1>
             <br>
             <h5>A place to read, write, and deepen your understanding</h5>
          <a href="/posts">   <button class="cssbuttons-io-button">Start reading
                <div class="icon">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                </div>
              </button></a>
    </div>
    <di class="footer">
        <p>&copy; 2024 Code it . All Rights Reserved.</p>
    </div>
   
    
</body>
</html>
