# waph-atmakugh
# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Atmakuri Ganesh

**Email**: atmakugh@mail.uc.edu

**Short-bio**: A masters student with communication,organizational, and technical skills seeking opportunities. A hand-working and motivated engineering student with authentic skills in user application development and design thinking,dedicated to levaraging my abilities as a capable and diligent student
![ganesh headshot](/Coursefileswaph/AG photo.jpg)

## Repository Information

Respository's URL: [https://github.com/ATMAKURIGANESH3009/waph-atmakugh.git](https://github.com/ATMAKURIGANESH3009/waph-atmakugh.git)

This is a private repository for Atmakuri Ganesh to store all code from the course. The organization of this repository is as follows.

### Labs 

[Hands-on exercises in lectures](labs) 

  - [Lab 0](labs/lab0): Development Environment Setup 

### LAB 0 

**Part 1** - Ubuntu Virtual Machine & Software Installation
- Open Sandbox with UC credentials
- Search for the VM *web app programming* in the catalog
- Click on Request
- Enter the computer name 
- Click on Submit
- After Processing, we can see the deployed VM in deployments tab
- Click on Web app programming VM and then click on settings symbol which is present after the computer name 
- Click on connect to remote console to open the VM
- Login with Administration password
- After opening the ubuntu VM, search for the terminal to open
- We need to install the net-tools. In order to install that enter the command *sudo apt install net-tools*
- Type the command ifconfig to view
- Next we need to install apache web server using the command *sudo apt install apache2*
- After we need to install git using *sudo apt install git*
- Install sublime text using *sudo snap install sublime-text --classic*
- Next, a pandoc application need to be installed to convert markdown files into pdf using the command *sudo apt install pandoc*
- Pandoc requires few installations to render pdf files. We need to install them by using the commands
  - sudo apt-get install texlive-latex-base
  - sudo apt-get install texlive-fonts-recommended
  - sudo apt-get install texlive-latex-extra
  - sudo apt-get install texlive-fonts-extra
- Now all the required softwares are installed properly

**Apache web server Testing**
![ss1](/Coursefileswaph/ss1.png)

**Part 2** - git repositories and excercises

**The Course repository**
![ss2](/Coursefileswaph/ss2.png)

**Private Repository**
- To creat a new private repository on gitbub, first we need to sign in with our credentials
- Click on profile icon on right side
- Click on your repositories
- Click on new
- Give the Repository name
- Select private
- Click on create repository

Repository URL: [https://github.com/ATMAKURIGANESH3009/waph-atmakugh.git](https://github.com/ATMAKURIGANESH3009/waph-atmakugh.git)

**Generating and setting up ssh keys**
- Type the command ssh-keygen
- Leave the blank and click enter when it asked for passphrase
- To view the file use ls ~/.ssh/
- It will list out the two files
- Use the command cat ~/.ssh/id_rsa.pub to open the file and copy the key
- Now open the github in the browser and then click on settings
- Select SSH and GPG keys
- Click on New SSH key
- Give the title and paste the key over there 
- After pasting, click on add SSH key
- Now we all set to clone private repository in our local machine
- To clone the repository use the command *git clone git@github.com:ATMAKURIGANESH3009/waph-atmakugh.git*
- Now the repository is cloned into our system
- Next create a folder named labs
- Inside labs, create a subfolder lab0
- Use the template provided to establish the report for lab0

**Screenshot showing commiting the changes in VM**

![ss3](/home/administrator/Coursefileswaph/ss3.png)




