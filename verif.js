function isEmpty(){
    var bool=0;
    var elm= document.getElementsByName('Commentaire');
    var cla=document.getElementsByClassName('required');
    var btn = document.getElementById('formu');
    var note = document.getElementById('note');
    var val=elm[0].value;
    var word= val.split(' ');
    
    for(i=0;i<cla.length;i++){
        if(cla[i].value==""){
            bool=1
        }
    }
    if(word.length > 10){
        alert('Les commentaires ne peuvent pas excéder 10 mots ')
    }
    else if(bool==1){
        alert('Vous devez remplir tous les champs');
    }
    else if(note.value<0 || note.value>10){
        alert('La note doit être comprise entre 0 et 10');
    }
    else{
        btn.submit();
    }
}