/**
 * @api {post}  /v1/change_password Change Password
 * @apiName Change Password
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 * 
 * @apiDescription This api is used to user change password after login.
 * @apiHeader {String} Authorization Bearer <access_token>
 * @apiExample Example usage:
 {
   "current_password":"Admin@123",
   "new_password":"Kiwi@123*"
 }
 * @apiParam {String} current_password Current password is required in body.
 * @apiParam {String} new_password New password is required in body.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": null,
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
    "message": "The current_password field is required."
}
HTTP/1.1 417 Expectation Failed
{
    "data": {},
    "message": "The current_password field is required."
}
HTTP/1.1 417 Expectation Failed
{
    "data": {},
    "message": "The new_password field is required."
}
HTTP/1.1 422 Unprocessed Entity
{
    "data": {},
    "message": "You current password does not match."
}
*/