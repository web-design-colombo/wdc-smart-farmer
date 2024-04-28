    function scrollToBottom() {
        var messages = document.getElementById('messages');
        messages.scrollTop = messages.scrollHeight;
    }

    // Call the function when the page loads or new messages are added
    window.onload = scrollToBottom;

    //auto refresh every 15 seconds and Do not reload messeges if user is typing a message
    // setInterval(function() {
    //     if (document.getElementById('messages').value == '') {
    //         location.reload();
    //     }
    // }, 5000);



    // only reload this id div "messages" in every 2 seconds and don't chat box scroll
    // setInterval(function() {
    //     $('#messages').load(location.href + ' #messages');
    // }, 2000);


    // only reload this id div "messages" in every 2 seconds and don't chat scroll
    setInterval(function() {
        // Load only the #messages div from the current URL
        $('#messages').load(location.href + ' #messages');
    }, 2000);




    // Call the scrollToBottom function when the page loads or new messages are added
    window.onload = scrollToBottom;





    //other user is typing shwoing and after sent that message show in the chat box with the time





