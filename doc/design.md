AppStudio Project 1 by Dasyel Willems (10172548)

# Design document #

+ __Database__:
    - Users:  
        * id
        * username
        * email
        * password
        * answered
        * correct
    - Questions:  
        * id
        * name
        * question
        * right_answer
        * wrong_answer1
        * wrong_answer2
        * wrong_answer3
        * type
        * resource
        * done
        * reports
        
+ __Pages__:
    - Login:
        * login form (links to home page)
        * create account form (links to login page)
    - Home:
        * start button (links to question page)
        * my account button (links to manage account page)
        * my questions button (links to manage questions page)
        * logout button (links to login page)
    - Manage Account:
        * username
        * email
        * password
        * edit button (links to manage account (editable) page)
        * home button (links to home page)
    - Manage Account (editable):
        * username
        * email form (links to manage account page)
        * password form (links to manage account page)
    - Manage Questions:
        * add question button (links to create question page)
        * for every question show an edit and remove button
        * home button (links to home page)
    - Create Question:
        * create question form (links to manage questions page)
        * back button (links to manage question page)
        * home button (links to home page)
    - Question (pic/video):
        * question name
        * resource (pic/video)
        * next button (links to the question (answers) page)
        * home button (links to home page)
        * this-is-wrong button (adds 1 to the amount of reports on this question)
    - Question (answers):
        * question name
        * questions question
        * answer form (links to question (result) page)
        * home button (links to home page)
        * this-is-wrong button (adds 1 to the amount of reports on this question)
    - Question (result):
        * question name
        * result (shows if answer was right or else which was the right answer)
        * next button (links to a new question (pic/video) page)
        * home button (links to home page)
        * this-is-wrong button (adds 1 to the amount of reports on this question)
        
        
