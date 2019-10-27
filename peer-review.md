## P3 Peer Review

+ Reviewer's name: Tasneem Munshi   
+ Reviwee's name: Shawna
+ URL to reviewee's Github repo: *<https://github.com/smsummers1/e2>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?
No - I am not able to produce any errors or unexpected results!  Everything executes as the user has intended to per their instructions and notes.  Worked wonderfully!

### Referencing the course nots on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
The form design flow that is used is Design C. The form is outlined and displayed in the view file, index.php. When you submit the form, it is going to submit to the process.php file. In the process.php file, the data will be received from the form submission and and will be checked to see if it's the correct number or if it's too high or too low. Additionally, the data results will be stored in a session. This project design is basically doing the form processing distinctly in the process.php file. This processing file is then sending the visitor back to the index.php page which includes a display of the results and the original form.

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
No, there are no separation of concern issues in any of the files. The view file contains view-specific code as well as the form. There's even a CSS stylesheet! And, the controller file contains non-display related logic. Everything is appropriately stored and outlined in its respective file-type. 

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
There were no aspects of the code that were not clear or self-evident. The user appropriately and clearly explains each part of the code with corrseponding comments - from labeling that variables have been set, to establishing what the guess outcome is in a potential scenario.  They also label comments outlining what to expect if the guess is higher than the actual number or lower than the actual number.  Everything is nicely outlined and defined!

### List any/all built-in PHP methods used with a brief summary of what the method does
The PHP method that is used is POST. The data that is submitted is not displayed in the browser's query string - the user's input is basically not being appended to the URL. The data input is being sent behind the scenes.

### Are there any parts of the code that you found interesting or taught you something new?
I thought it was interesting and pretty cool how the project implemented the use of Javascript! This wasn't necessarily something new for me only because I've taken prior courses at Harvard Extension which taught Javascript - so, it was interesting to see this concept implemented within this particular use case. I just thought it was a neat way of including something different within the project for the purposes of creatively being able to "reveal the mystery number"... very nicely done!

### Are there any parts of the code that you don't understand?
Everything is pretty straight forward and well outlined/commented with labels! I was able to understand the files and code within each file type.

### Are there any best practices discussed in course material that you feel were not addressed in the code?
There were no best practices not addressed within the code/file types... I believe the user did a good job of following the best practices we've learned thus far, to the best of her ability.

### Do you have any additional comments not covered in the above questions?
No additional comments - just want to note that this was a great excercise. Not just from the perspective of reviewing someone else's code (based on their skillset), but also from the perspective of being able to reinforce the lessons/skills we've learned thus far. I felt reviewing someone else's code along with re-reviewing some of the videos and class notes helped me to understand the same set of material via a slightly different lens.