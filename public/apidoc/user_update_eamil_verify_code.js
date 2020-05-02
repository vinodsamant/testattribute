/**
 * @api {post}  /v1/email_code_verify Change email verify code 
 * @apiName Change email verify code
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user change email verify code.
 * 
 * @apiExample Example usage:
 {
	"token": "cG9vamFAeW9wbWFpbC5jb20=",
	"new_email" : "david.smith@yopmail.com",
	"code":"507824"
 }
 * @apiHeader {String} Authorization Bearer <access_token>
 *
 * @apiParam {String} token Token is required in body.
 * @apiParam {String} new_email New Email is required in body.
 * @apiParam {String} code Code is required in body.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": {
        "id": 3,
        "uuid": "d39c1bb0-39f4-4a20-83b2-7a8772007f65",
        "fname": "Emma",
        "lname": "Agrawal",
        "email": "emma2@yopmail.com",
        "gender": "female",
        "age": 25,
        "phone": null,
        "role": "2",
        "status": 1,
        "is_verified": 1,
        "email_token": "cG9vamE1QHlvcG1haWwuY29t",
        "last_login": "2020-05-01 12:37:19",
        "created_at": "2020-05-01 09:57:06",
        "updated_at": "2020-05-01 13:04:27",
        "is_logged_in": 1,
        "device_type": null,
        "device_token": null,
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE1ODgzMjg5MTUsImV4cCI6MTU4ODQxNTMxNSwibmJmIjoxNTg4MzI4OTE1LCJqdGkiOiJJQkZvZ3ZlYTlQQjVpRXZPIiwic3ViIjozLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.PQWJof3F_ACQSM5p09k4tkCMq5VaxWCzS77zEXlCtYo"
    },
    "message": "Email updated successfully."
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