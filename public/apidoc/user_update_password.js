/**
 * @api {post}  /v1/update_password Set Password
 * @apiName Set Password
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user set password.
 * 
 * @apiExample Example usage:
 {
    "token":"c3VzaGlsLmt1bWFyQHlvcG1haWwuY29t",
    "password" : "David@123",
    "is_auth"  : 1
 }
 * @apiParam {String} token Token is required in body.
 * @apiParam {String} password Password is required in body.
 * @apiParam {String} is_auth is_auth(0|1) is optional in body.
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
        "last_login": null,
        "created_at": "2020-04-28 11:53:07",
        "updated_at": "2020-04-28 11:54:29",
        "is_logged_in": 0,
        "device_type": null,
        "device_token": null,
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC92MVwvdXBkYXRlX3Bhc3N3b3JkIiwiaWF0IjoxNTg4MDc1MDI3LCJleHAiOjE1ODgxNjE0MjcsIm5iZiI6MTU4ODA3NTAyNywianRpIjoiNlNuUjU4VHB3MlF4aUxvYyIsInN1YiI6NCwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.Roz36o1MY5NPwv-hF_3sRCR4T4SP1xdmnqo5Nue0IgE"
    },
    "message": "Password updated successfully."
 }
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
    "message": "The token field is required."
}
HTTP/1.1 417 Expectation Failed
{
    "data": {},
    "message": "Password must be alphanumeric between 8 to 16 characters"
}	
*/