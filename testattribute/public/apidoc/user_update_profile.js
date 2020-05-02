/**
 * @api {post}  /v1/update_profile Update Profile
 * @apiName Update Profile
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user update profile.
 * 
 * @apiExample Example usage:
 {
    "fname":"David",
    "lname":"Smith",
    "gender":"male",
    "age":28,
    "phone":"9876543210" 
 }
 * @apiHeader {String} Authorization Bearer <access_token>
 *
 * @apiParam {String} fname First name is required in body.
 * @apiParam {String} lname Last name is required in body.
 * @apiParam {String} gender Gender(male|female) is required in body.
 * @apiParam {Number} age Age is required in body.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
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
        "age": 28,
        "phone": "9876543210",
        "role": "2",
        "status": 1,
        "is_verified": 1,
        "email_token": "ZGF2aWRAeW9wbWFpbC5jb20=",
        "last_login": "2020-04-28 12:26:52",
        "created_at": "2020-04-28 11:53:07",
        "updated_at": "2020-04-28 12:45:51",
        "is_logged_in": 1,
        "device_type": null,
        "device_token": null,
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE1ODgwNzY4MTIsImV4cCI6MTU4ODE2MzIxMiwibmJmIjoxNTg4MDc2ODEyLCJqdGkiOiJvZXNHZVJQYzc3TmhBc2VBIiwic3ViIjo0LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.Tzjj1DbJnCLP7FFkVzzd_jxE_m3nlsrBK1zPzyxbGjc"
    },
    "message": "Profile updated successfully."
 }
 *
 * @apiErrorExample Sample Error-Response:
 * 
HTTP/1.1 405 Method Not Allowed
{
    "data": {},
    "message": "Method Not Allowed"
}
HTTP/1.1 401 Unauthorized
{
    "message": "Authorization Token not found"
}
HTTP/1.1 401 Unauthorized 
{
    "message": "Token is Invalid"
}
HTTP/1.1 403 Forbidden 
{
    "message": "Token is Expired"
}
*/