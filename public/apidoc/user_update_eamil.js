/**
 * @api {post}  /v1/send_code_email Change Email
 * @apiName Change Email
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user change email.
 * 
 * @apiExample Example usage:
 {
	"new_email" :"david.smith@yopmail.com"
 }
 * @apiHeader {String} Authorization Bearer <access_token>
 *
 * @apiParam {String} new_email New Email is required in body.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": {
        "type": "email_updation",
        "email_token": "cG9vamFAeW9wbWFpbC5jb20=",
        "verify_code": 601521
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