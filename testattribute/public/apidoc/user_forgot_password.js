/**
 * @api {post}  /v1/forgot_password Forgot Password
 * @apiName Forgot Password
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user request to reset password.
 * 
 * @apiExample Example usage:
 {
    "email":"david-smith@yopmail.com"    
 }
 * @apiParam {String} email Email is required in body. 
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": {
        "type": "forgot_password",
        "email_token": "ZGF2aWQtc21pdGhAeW9wbWFpbC5jb20=",
        "verify_code": 547184
    },
    "message": "6 digit code has been sent to your email address."
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
    "message": "The email field is required."
}
HTTP/1.1 417 Expectation Failed
{
    "data": {},
    "message": " Uh-Oh! No match found. Please enter your registered email account."
}
*/