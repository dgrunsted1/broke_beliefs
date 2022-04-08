$("input").keyup(function(event){
    
    if (event.originalEvent['code'] == 'Backspace' && !$(this).attr('class').includes('first')) {
        if ($(this).val().length == 0) $(this).prev('.inputs').focus();
    }else if ($(this).attr('id').includes('last') && event.originalEvent['code'] != 'Enter'){
        // wait for user to hit enter
    }else if ($(this).attr('id').includes('last') && event.originalEvent['code'] == 'Enter'){
        let row = $(this).attr('class').split(' ')[1];
        let guess = "";
        let i = 0;
        $('.'+row).each(function(){ guess += $(this).val(); });

        if (word_list.includes(guess)){
            let is_right_answer = true;
            $('.'+row).each(function(){
                let color = get_color($(this).val(), i);
                $(this).addClass(color);
                if (!color.includes('green')) is_right_answer = false;
                i++;
            });
            if (is_right_answer) winner(row);
            else if (row.includes('f')) end_of_game();
            else $(this).next('.inputs').focus();
        }else {
            alert("word not in word list");
        }
    }else if ($(this).val().length == this.maxLength) {
        $(this).next('.inputs').focus();
    } 
});


function get_color(letter, index){
    word_array = word.split("");
    if (word_array[index] == letter) return "green";
    for (let i = 0; i < word_array.length; i++){
        if (word_array[i] == letter) return "yellow";
    }
    return "grey";
}

function end_of_game(){
    alert("the word was "+word+" stupid");
}

function winner(row){
    guesses = {'a': '1', 'b': '2', 'c': '3', 'd': '4', 'e': '5', 'f': '6'};
    alert(`You Win!  ${guesses[row]}`);
}
