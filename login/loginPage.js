var form_el = document.getElementById("textForm")


form_el.addEventListener("click", function(evt) {
    evt.preventDefault()
    validate()
})

function validate(){
    var username = document.getElementById('username').value
    var password = document.getElementById('password').value


    var firstLetter =  username.charAt(0);

    if(username.length < 6 || username.length > 10){
        window.alert("Invalid username or password")
        return
    }
    else if(password.length < 6 || password.length > 10){
        window.alert("Invalid username or password")
        return
    }
    else if(!numeric(password)){
        window.alert("Invalid username or password")
        return
    }
    else if(!LowerCase(password)){
        window.alert("Invalid username or password")
        return
    }
    else if(!numeric(username)){
        window.alert("Invalid username or password")
        return
    }
    else if(!isNaN(firstLetter)){
        window.alert("Invalid username or password")
        return
    }

    else if(!UpperCase(password)){
        window.alert("Invalid username or password")
        return
    }
    else if(!digit(password)){
        window.alert("Invalid username or password")
        return
    }
    else{
        console.log('validated')
        window.alert("User Validated!")
        return
    }
}

function numeric(iTxt){
    var letters = /^[0-9a-zA-Z]+$/;
    if(iTxt.match(letters)){
        return true
    }
    else{
        return false
    }
}


function UpperCase(str) {
    return (/[A-Z]/.test(str))
}

function isCharacter_Letter(char) {
    return (/[a-zA-Z]/).test(char)
}

function LowerCase(str) {
    return (/[a-z]/.test(str))
}

function digit(str) {
    return (/[0-9]/.test(str));
}
