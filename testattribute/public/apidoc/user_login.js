/**
 * @api {post}  /v1/login Login
 * @apiName Login
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 *
 * @apiDescription This api is used to login.
 *
 * @apiExample Example usage:
 *
    {
        "email": "david-smith@yopmail.com",
        "password": "David@123"
    }
 * @apiParam {String} email Email is required in body.
 * @apiParam {String} password Password is required in body.
 *
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * @apiSuccess {String} access_token  Save access_token to localstorage.
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": {
        "id": 2,
        "uuid": "76155355-109e-4838-b042-4d54d273af16",
        "fname": "David",
        "lname": "Smith",
        "email": "david@yopmail.com",
        "gender": "male",
        "age": 25,
        "phone": null,
        "role": "2",
        "status": 1,
        "is_verified": 1,
        "email_token": "ZGF2aWRAeW9wbWFpbC5jb20=",
        "last_login": "2020-04-28 11:59:48",
        "created_at": "2020-04-28 11:53:07",
        "updated_at": "2020-04-28 11:59:48",
        "is_logged_in": 1,
        "device_type": null,
        "device_token": null,
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE1ODgwNzUxODgsImV4cCI6MTU4ODE2MTU4OCwibmJmIjoxNTg4MDc1MTg4LCJqdGkiOiJHc0VJUEl3WVZTM2NVVTZNIiwic3ViIjo0LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.EmmQvs4YuP4ohpzX-YbhZOa-mHd5Bzc_8DVhHXATzR0"
    },
    "message": "Logged in successfully."
 }
 *
 *
 * @apiErrorExample Sample Error-Response:
 * 
HTTP/1.1 405 Method Not Allowed
{
	"data": {},
	"message": "Method Not Allowed"
}
HTTP/1.1 417 Expectation Failed
{
	"data": {},
	"message": "Password must be alphanumeric between 8 to 16 characters"
}
HTTP/1.1 422 Unprocessed Entity
{
	"data": {},
	"message": "Either your credentials are incorrect or your account is not active."
}
*/