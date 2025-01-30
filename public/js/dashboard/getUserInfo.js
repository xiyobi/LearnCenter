
async function user() {

    const { default: apiFetch } = await  import('../../js/utils/allFetch.js');
    await apiFetch('/users/getInfo', {
    method: "Get"
}).then(user =>{
    console.log(user)
        alert(4561)
    document.getElementById('username').innerText = user.user.full_name;
    document.getElementById('createdAt').innerText = user.user.created_at;
    document.getElementById('updateAt').innerText = user.user.update_at;
    document.getElementById('wallet').innerText = user.user.wallet;
    document.getElementById('teacher').innerText = user.user.teacher;

})
    .catch((error)=>{
    window.location.href='/login';
});
}
    user();
