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
        * user_id
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
    - User_Question:  
        * id
        * user_id
        * question_id
        
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
    - Reports overview (admin page):
        * questions ordered by reports (high->low)
        * for every question its contents and a delete button.

+ __Controllers__:
    - Home:
        * index() - Loads the home page.
    - Question:
        * index() - Loads the users manage questions page.
        * create() - Loads and handles the create question form.
        * delete($id) - Deletes a question by its id.
        * edit($id) - Loads and handles the edit question form.
        * get() - loads the question (pic/video) page for a random not-yet-done question.
    - User:
        * login() - Loads and handles the login form, sets session data.
        * logout() - Removes the session data.
        * create() - Loads and handles the create account form.
        * show() - Loads the manage account page
        * edit() - Loads and handles the edit account form.
        
+ __Models__:
    - Question-model:
        * create() - Adds new question to the database.
        * get($id) - Gets a question by id, if no id is given it gets all questions of this user.
        * delete($id) - Deletes a question by id.
        * edit($id) - Edits a question by id.
    - User-model:
        * create() - Adds new account to the database.
        * get() - Gets the current users account.
        * edit() - Edits the current users account.
        * check_credentials() - Checks for login validity.
        
+ __Helpers__:
    - login_helper:
        * logged_or_redirect() - redirects to the login page if the user is not logged in (used on every controller except User.login and User.create)
        * not_logged_or_redirect() - redirects to home page if user is logged in (only used on the User.login and User.create controllers)
        
