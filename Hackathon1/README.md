# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung


## Student

**Name**: Atmakuri Ganesh

**Email**: atmakugh@mail.uc.edu

**Short-bio**: A masters student with communication,organizational, and technical skills seeking opportunities. A hand-working and motivated engineering student with authentic skills in user application development and design thinking,dedicated to levaraging my abilities as a capable and diligent student <br>

![Ganesh headshot](images/AGphoto.jpg) 



 
## Lab Overview 

- This hackathon divided into 2 sub sections
- Task 1 is about attacks performed with different methods
- I understood how the cross scripting attacks takes places on website
- Task 2 is about input validations and encoding methods
- I understood how the data is validating before and after the response

## Repository Information

Respository's URL: [https://github.com/ATMAKURIGANESH3009/waph-atmakugh/tree/main/labs/lab2](https://github.com/ATMAKURIGANESH3009/waph-atmakugh/tree/main/labs/lab2)


# Hackathon 1 - Cross-site Scripting Attacks and Defenses 

## Overview and Requirements 

This hackathon consists of multiple hands-on exercises covered in Lectures 7-8, where you would perform cross-site scripting attacks on multiple levels to understand the vulnerabilities as well as defense methods. Ensure you follow the instructions to do the lecture exercises to complete this hacking exercise.

This hackathon has two tasks with multiple sub-tasks with grade distribution as follows.

### Task 1: Attacks (35 pts) 

There are seven levels of reflected cross-site scripting attacks on
[http://waph-hackathon.eastus.cloudapp.azure.com/xss/](http://waph-hackathon.eastus.cloudapp.azure.com/xss/)

- **Level-0**
- For this level, we need to provide alert message input in the input field
- After submitting, there is a alert message popped out 
- Screenshot for level 0 (Figure 2) <br>

![Level0](/images/level0.png)

- **Level-1**
- For level 1, I have provided script tag with alert message in the URL
- Then, I have executed the url and it displayed the alert message
- Screenshot for level 1 (Figure 3) <br>

![Level1](/images/level1.png)

- **Level-2**
- For level 2 we need to provide input from HTTP post request
- I have used the lab2 html file
- Here, I have edited the Post request form by changing the action file from echo.php to the url provided
- And, then I changed the value from data to input
- Then I provided the input in the input field of Html Post request
- Level 2 code (figure 4): <br>

![Level2_Code](/images/level2code.png)

- Output for the level 2 (figure 5) <br>

![Level2](/images/level2.png)

- **Level-3**
- Level 3 filtering the script tag. 
- For this, I given script tag inside the script tag
- First script tag is filtered out and the second script tag output is displayed
- Code and output is displayed in (figure 6) <br>

![Level3](/images/level3.png)

- **Level-4**
- Level 4 does not allow server side code in input field
- For this I performed encoding the characters to base64 format
- Level 4 code (figure 7) <br>

![Level4_Code](/images/level4code.png)

- Output for level4 (figure 8) <br>

![Level4](/images/level4.png)

- **Level-5**
- For level 5, server side code does not allow any code or script message in the input
- I have given the img tag without source with onerror
- When the error is executed the charcode which is in the form of ascii value is converted to string
- Provided confirm acts like alert message to print 
- Level 5 code (figure 9) <br>

![Level5_Code](/images/level5code.png)

- Output is displayed in (figure 10) <br>

![Level5](/images/level5.png)

- **Level-6**
- For level 6, server side data is encoded 
- In the element section I edited the form action by adding img src before the input
- When I hover over the mouse on the image the alert script is executed and dislayed
- Level 6 code (figure 11) <br>

![Level6_Code](/images/level6.1.png)

- Output is displayed in (figure 12) <br>

![Level6](/images/level6.2.png)



### Task 2. Defenses: (15 pts) 

- **echo.php**
- I performed input validation for the echo.php file from lab 1
- When I click submit without giving any input
- It will print the input validation result as "Please enter data field"
- Code and output for this displayed in (figure 13) <br>

![echo.php](/images/ht2.1.png)

- Github commit message of it (figure 14): <br>

![echo.php github commit](/images/ht2.1.1.png)

- **Current front end prototype**
- I have given input validation code for handling the data
- When you click on submit without giving any input then the alert message is displayed showing to give any input
- Code and output for this displayed in (figure 15) <br>

![Input validation](/images/ht2.2.png)

- Github commit message of it (figure 16): <br>

![echo.php github commit](/images/ht2.2.1.png)

- Then I performed encoding method before it prints the output to the server
- First the response is encoded with encodeURIcomponent and then we can print the encoded message 
- We can also print the decoded message
- For validations, I given the console message everytime to check the correct response.
- Code is displayed in (figure:17) <br>

![Encoded result](/images/ht2.3.png)

- Github commit message of it (figure 18): <br>

![Encoded github commit](/images/ht2.3.1.png)




