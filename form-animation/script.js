const switchars=[...document.queryselectorAll('.switchar')]
switchars.forEach(item=> {
    item.addEventListener('click',function()){
    switchars.forEach(item=>item.parentelement.classlist.remove('is-active'))
    this.parentelement.classlist.add('is-active')
}