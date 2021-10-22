<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Welcome to My World</title>
   </head>

   <body>
      <h1>Greetings everyone!</h1>
      <p>I would like to introduce myself, my name is <strong><em>Jonathan Menjivar</em></strong>.</p>
      <p>I am currently a senior at the University of Houston Downtown.<br>
	 I love everything technology related, I have a strong passion for it.<br>
	 I always want to know what's new in the tech industry and I love<br>
	 to learn how things work. My favorite hobbies are fishing, paintballing,<br>
	 bike riding and any outdoor activity.</p>
      <p>I love taking pictures and making short videos in my free time.<br>
	 I am currently improving my skills using Davinci Resolve software <br>
	 to make my videos. I love taking pictures with my Sony A6000 camera.</p>
      <p><img src = "DSC03262.JPG" width = "200" height = "300"</p>
      <h3>Thanks for stopping by!</h3>


      <h1>Here are my favorite coding sites to learn how to program:</h1>
      <p><strong>Click a name to visit that site.</strong></p>

      <p><a href = "https://www.w3schools.com">W3Schools</a></p>
    <ul>
         <li>You have so many programming options on this website:</li>
            <!-- this starts a nested unordered list, which uses a -->
            <!-- different bullet. The list ends when you -->
            <!-- close the <ul> tag. -->
            <ul>
               
               <li>Programming

                  <!-- another nested ordered list -->
                  <ol>
                     <li>Python</li>
                     <li>Java</li>
                     <li>HTML5</li>
                     <li>JavaScript</li>
		     <li>CSS</li>
                     <li>New languages</li>
                  </ol>
               </li> <!-- ends programming li of line 38 -->
            </ul> <!-- ends the nested list of line 24 -->
         </li> 



      <p><a href = "http://www.freecodecamp.org">freeCodeCamp</a></p>
      <p><a href = "http://www.udemy.com">udemy</a></p>
      <li>Last but not least it would be youtube, you can learn anything here.</li>
      <p><a href = "http://www.youtube.com">Youtube</a></p>

  

   <body>
      <h1>We would love to hear from you!</h1>
      <p>Please let me know what's your favorite programming sites.</p>

      <form method = "post" action = "https://www.deitel.com/">

         <input type = "hidden" name = "recipient"
            value = "deitel@deitel.com">
         <input type = "hidden" name = "subject" 
            value = "Feedback Form">
         <input type = "hidden" name = "redirect" 
            value = "main.html"> 

         <p><label>Name: 
               <input name = "name" type = "text" size = "25">
            </label></p>
 
         <!-- <textarea> creates a multiline textbox -->
         <p><label>Comments:<br>
            <textarea name = "comments"
               rows = "4" cols = "36">Enter comments here.</textarea>
         </label></p>

         <!-- <input type = "password"> inserts a -->
         <!-- textbox whose display is masked with -->
         <!-- asterisk characters -->
         <p><label>E-mail Address: 
            <input name = "email" type = "password"  size = "25">
         </label></p>              

         <p>
            <strong>Things you liked:</strong><br>

            <label>Site design
               <input name = "thingsliked" type = "checkbox" 
                  value = "Design"></label>
            <label>Links
               <input name = "thingsliked" type = "checkbox" 
                  value = "Links"></label>
            <label>Ease of use
               <input name = "thingsliked" type = "checkbox" 
                  value = "Ease"></label> 
            <label>Images 
               <input name = "thingsliked" type = "checkbox" 
                  value = "Images"></label>
            <label>Source code
               <input name = "thingsliked" type = "checkbox" 
                  value = "Code"></label>
         </p>

         <!-- <input type = "radio"> creates a radio -->
         <!-- button. The difference between radio buttons -->
         <!-- and checkboxes is that only one radio button -->
         <!-- in a group can be selected. -->
         <!--<p>
            <strong>How did you get to our site?:</strong><br>

            <label>Search engine
               <input name = "howtosite" type = "radio"
                  value = "search engine" checked></label>
            <label>Links from another site
               <input name = "howtosite" type = "radio" 
                  value = "link"></label> 
            <label>Linkedin Web site
               <input name = "howtosite" type = "radio" 
                  value = "link"></label>
            <label>Reference in a book
               <input name = "howtosite" type = "radio" 
                  value = "book"></label>
            <label>Other
               <input name = "howtosite" type = "radio" 
                  value = "other"></label> -->
         </p>

         <p>
            <label>Rate our site: 

                <!-- the <select> tag presents a drop-down -->
                <!-- list with choices indicated by the -->
                <!-- <option> tags -->
               <select name = "rating">
                  <option selected>Amazing</option>
                  <option>10</option>
                  <option>9</option>
                  <option>8</option>
                  <option>7</option>
                  <option>6</option>
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                  <option>Awful</option>
               </select>
            </label>
         </p>

         <p>
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">
         </p>   
      </form>



   </body>
</html>