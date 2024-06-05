let uri = new URL(window.location.href);
const PATH = new URL(window.location.href).pathname.split("/")[1];


if(uri['pathname'] == `/${PATH}/index.php/edit`)
{       
    document.querySelector("#form_edit button").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = `/${PATH}/index.php/`;
    });
}

if(uri['pathname'] == `/${PATH}/index.php/login`)
{
    document.querySelector("#login_link_reg").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = `/${PATH}/index.php/registration`;
    });
}

if(uri['pathname'] == `/${PATH}/index.php/registration`)
{
    document.querySelector("#reg_link_login").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = `/${PATH}/index.php/login`;
    });
    
}