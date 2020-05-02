/**
 * @api {post}  /v1/resend_code_email Change email resend code
 * @apiName Change email resend code
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user change email resend code.
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
        "type": "resend_code",
        "email_token": "cG9vamFAeW9wbWFpbC5jb20=",
        "verify_code": 324166
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