## P3 Peer Review

+ Reviewer's name: Ping Ji
+ Reviwee's name: Josh Lim
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/josh-lim1234/Project-3>*

## 1. Interface

+ The title of this project is "Drink Price Comparison", so I expected something that list side by side at the first place, I understood it later, though, when I saw the word calculate at the second line. 

+ The interface is normal. The HTML file is rendered by browser only. The css link in header ( `css/form.css`) doesn't work as the only css file can be found at `/public/css` is `app.css`. The result page 

+ It might be better to move $ sign to the line of the amount. That would be easier for the user, at least, for me. 

## 2. Functional testing

I tried to submit the form in different ways: letters rather than numbers, leave some of the input area empty, large, small, negative number, etc. The only thing partially failed is when put a negative number in the field of price. The result, unit price, is still logically negative, but the best pratice might be prevent the user from using negative number at the first place. 


## 3. Code: Routes

The routes file is simple and clean. No extra logic/display code in this file.

## 4. Code: Views

+ Template inheritance is not used.
+ There is no code separation issue.
+ The `load` method uses `return 'a string'` to show the result. It could be done by return to a blade and use `{{ }}` statements for practice.


## 5. Code: General

+ There are no inconsistencies between the code and the course notes are found.
+ The validation is done by HTML itself. It would be better to take advantage of Laravel to validating the request and display errors. 
+ The code is relatively simple and does not need commets.
+ It is a simple practice and I found it easy to understand.

## 6. Misc
The author put `class` in `<html>` tag, which is wrong.