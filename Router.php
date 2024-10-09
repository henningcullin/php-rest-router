<?php

enum Method: string
{
    /** 
     * The GET method requests a representation of the specified resource. 
     * Requests using GET should only retrieve data and have no other effect. 
     * 
     * Reference: [RFC7231, Section 4.3.1]
     */
    case GET = 'GET';

    /** 
     * The POST method submits data to be processed to a specified resource. 
     * It can result in the creation of a new resource or the modification 
     * of existing resources. 
     * 
     * Reference: [RFC7231, Section 4.3.3]
     */
    case POST = 'POST';

    /** 
     * The PUT method replaces all current representations of the target 
     * resource with the request payload. 
     * 
     * Reference: [RFC7231, Section 4.3.4]
     */
    case PUT = 'PUT';

    /** 
     * The HEAD method requests the headers of a specified resource, 
     * similar to a GET request, but without the response body. 
     * 
     * Reference: [RFC7231, Section 4.3.2]
     */
    case HEAD = 'HEAD';

    /** 
     * The DELETE method deletes the specified resource. 
     * 
     * Reference: [RFC7231, Section 4.3.5]
     */
    case DELETE = 'DELETE';

    /** 
     * The OPTIONS method describes the communication options for the 
     * target resource. It can be used to check the supported methods 
     * and other capabilities of a server. 
     * 
     * Reference: [RFC7231, Section 4.3.7]
     */
    case OPTIONS = 'OPTIONS';

    /** 
     * The PATCH method applies partial modifications to a resource. 
     * 
     * Reference: [RFC5789, Section 2]
     */
    case PATCH = 'PATCH';

    /** 
     * The TRACE method performs a message loop-back test along the 
     * path to the target resource, providing a useful debugging tool. 
     * 
     * Reference: [RFC7231, Section 4.3.8]
     */
    case TRACE = 'TRACE';

    /** 
     * The CONNECT method establishes a tunnel to the server identified 
     * by the target resource. This is often used for SSL (HTTPS) 
     * connections through an HTTP proxy. 
     * 
     * Reference: [RFC7231, Section 4.3.6]
     */
    case CONNECT = 'CONNECT';

    /** 
     * The COPY method creates a duplicate of a resource at a different URI.
     * 
     * Reference: [RFC4918, Section 9.8]
     */
    case COPY = 'COPY';

    /** 
     * The LINK method establishes a relationship between two resources. 
     * 
     * Reference: [RFC2068, Section 9.4]
     */
    case LINK = 'LINK';

    /** 
     * The UNLINK method removes a relationship between two resources. 
     * 
     * Reference: [RFC2068, Section 9.4]
     */
    case UNLINK = 'UNLINK';

    /** 
     * The PURGE method is used to remove a cached resource from a cache. 
     * 
     * Reference: Not standardized in an RFC, but commonly recognized in CDN contexts.
     */
    case PURGE = 'PURGE';

    /** 
     * The PROPFIND method retrieves properties of a resource, primarily 
     * used in WebDAV. 
     * 
     * Reference: [RFC4918, Section 9.1]
     */
    case PROPFIND = 'PROPFIND';

    /** 
     * The PROPPATCH method modifies properties of a resource, primarily 
     * used in WebDAV. 
     * 
     * Reference: [RFC4918, Section 9.2]
     */
    case PROPPATCH = 'PROPPATCH';

    /** 
     * The MKCOL method creates a new collection (e.g., a directory) in 
     * WebDAV. 
     * 
     * Reference: [RFC4918, Section 9.3]
     */
    case MKCOL = 'MKCOL';

    /** 
     * The MOVE method moves a resource from one URI to another in WebDAV. 
     * 
     * Reference: [RFC4918, Section 9.4]
     */
    case MOVE = 'MOVE';

    /** 
     * The LOCK method locks a resource so that it cannot be modified 
     * by other users in WebDAV. 
     * 
     * Reference: [RFC4918, Section 9.7]
     */
    case LOCK = 'LOCK';

    /** 
     * The UNLOCK method unlocks a previously locked resource in WebDAV. 
     * 
     * Reference: [RFC4918, Section 9.8]
     */
    case UNLOCK = 'UNLOCK';
}

enum StatusCode: int
{
    // Informational responses

    /** 
     * This interim response indicates that everything so far is OK 
     * and that the client should continue with the request or ignore 
     * it if it is already finished.
     * 
     * Reference: [RFC9110, Section 15.2.1](https://datatracker.ietf.org/doc/html/rfc9110#section-15.2.1)
     */
    case CONTINUE = 100;

    /** 
     * This response code indicates that the server is switching 
     * protocols as requested by the client. 
     * 
     * Reference: [RFC9110, Section 15.2.2](https://datatracker.ietf.org/doc/html/rfc9110#section-15.2.2)
     */
    case SWITCHING_PROTOCOLS = 101;

    /** 
     * This status code indicates that the server has received and 
     * is processing the request, but no response is available yet. 
     * 
     * Reference: [RFC2518](https://datatracker.ietf.org/doc/html/rfc2518)
     */
    case PROCESSING = 102;

    /** 
     * This status code is used to return some response headers 
     * before the final response, often used for preloading. 
     * 
     * Reference: [RFC8297](https://datatracker.ietf.org/doc/html/rfc8297)
     */
    case EARLY_HINTS = 103;


    // Successful responses


    /** 
     * The request has succeeded. The meaning of the success depends 
     * on the HTTP method used. 
     * 
     * Reference: [RFC9110, Section 15.3.1](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.1)
     */
    case OK = 200;

    /** 
     * The request has been fulfilled, resulting in the creation of 
     * a new resource. 
     * 
     * Reference: [RFC9110, Section 15.3.2](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.2)
     */
    case CREATED = 201;

    /** 
     * The request has been accepted for processing, but the processing 
     * has not been completed. 
     * 
     * Reference: [RFC9110, Section 15.3.3](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.3)
     */
    case ACCEPTED = 202;

    /** 
     * The request was successful but the returned meta-information 
     * is not the definitive set of information. 
     * 
     * Reference: [RFC9110, Section 15.3.4](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.4)
     */
    case NON_AUTHORITATIVE_INFORMATION = 203;

    /** 
     * The server successfully processed the request, but is not returning 
     * any content. 
     * 
     * Reference: [RFC9110, Section 15.3.5](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.5)
     */
    case NO_CONTENT = 204;

    /** 
     * The server successfully processed the request, but is not returning 
     * any content, and requires that the requester reset the document view. 
     * 
     * Reference: [RFC9110, Section 15.3.6](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.6)
     */
    case RESET_CONTENT = 205;

    /** 
     * The server is delivering only part of the resource due to a range 
     * header sent by the client. 
     * 
     * Reference: [RFC9110, Section 15.3.7](https://datatracker.ietf.org/doc/html/rfc9110#section-15.3.7)
     */
    case PARTIAL_CONTENT = 206;

    /** 
     * This status code provides information about multiple resources 
     * in situations where multiple status codes might be appropriate. 
     * 
     * Reference: [RFC4918](https://datatracker.ietf.org/doc/html/rfc4918)
     */
    case MULTI_STATUS = 207;

    /** 
     * This status code indicates that the members of a DAV binding 
     * have already been enumerated in a previous reply. 
     * 
     * Reference: [RFC5842](https://datatracker.ietf.org/doc/html/rfc5842)
     */
    case ALREADY_REPORTED = 208;

    /** 
     * The server has fulfilled a GET request for the resource, and 
     * the response is a representation of the result of one or more 
     * instance-manipulations applied to the current instance. 
     * 
     * Reference: [RFC3229](https://datatracker.ietf.org/doc/html/rfc3229)
     */
    case IM_USED = 226;


    // Redirection messages


    /** 
     * This status code indicates multiple options for the resource 
     * that the client may follow. 
     * 
     * Reference: [RFC9110, Section 15.4.1](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.1)
     */
    case MULTIPLE_CHOICES = 300;

    /** 
     * This status code indicates that the resource has been permanently 
     * moved to a new URI. 
     * 
     * Reference: [RFC9110, Section 15.4.2](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.2)
     */
    case MOVED_PERMANENTLY = 301;

    /** 
     * This status code indicates that the resource is temporarily 
     * located at a different URI. 
     * 
     * Reference: [RFC9110, Section 15.4.3](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.3)
     */
    case FOUND = 302;

    /** 
     * This status code indicates that the response to the request can 
     * be found at another URI using the GET method. 
     * 
     * Reference: [RFC9110, Section 15.4.4](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.4)
     */
    case SEE_OTHER = 303;

    /** 
     * This status code indicates that the resource has not been modified 
     * since the last request. 
     * 
     * Reference: [RFC9110, Section 15.4.5](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.5)
     */
    case NOT_MODIFIED = 304;

    /** 
     * This status code indicates that the requested resource must be 
     * accessed through the proxy given by the location field. 
     * 
     * Reference: [RFC9110, Section 15.4.6](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.6)
     */
    case USE_PROXY = 305;

    /** 
     * This status code indicates that the resource is temporarily located 
     * at a different URI. The client must use the same method for the 
     * next request. 
     * 
     * Reference: [RFC9110, Section 15.4.8](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.8)
     */
    case TEMPORARY_REDIRECT = 307;

    /** 
     * This status code indicates that the resource has been permanently 
     * moved to a new URI, and the same method should be used for 
     * future requests. 
     * 
     * Reference: [RFC9110, Section 15.4.9](https://datatracker.ietf.org/doc/html/rfc9110#section-15.4.9)
     */
    case PERMANENT_REDIRECT = 308;


    // Client error responses


    /** 
     * The server could not understand the request due to invalid syntax. 
     * 
     * Reference: [RFC9110, Section 15.5.1](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.1)
     */
    case BAD_REQUEST = 400;

    /** 
     * This status code indicates that the request requires user 
     * authentication. 
     * 
     * Reference: [RFC9110, Section 15.5.2](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.2)
     */
    case UNAUTHORIZED = 401;

    /** 
     * This status code is reserved for future use and is not widely used. 
     * 
     * Reference: [RFC9110, Section 15.5.3](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.3)
     */
    case PAYMENT_REQUIRED = 402;

    /** 
     * The server understood the request, but refuses to authorize it. 
     * 
     * Reference: [RFC9110, Section 15.5.4](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.4)
     */
    case FORBIDDEN = 403;

    /** 
     * The server can't find the requested resource. 
     * 
     * Reference: [RFC9110, Section 15.5.5](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.5)
     */
    case NOT_FOUND = 404;

    /** 
     * The method specified in the request is not allowed for the resource. 
     * 
     * Reference: [RFC9110, Section 15.5.6](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.6)
     */
    case METHOD_NOT_ALLOWED = 405;

    /** 
     * The server cannot produce a response matching the criteria 
     * given in the request's headers. 
     * 
     * Reference: [RFC9110, Section 15.5.7](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.7)
     */
    case NOT_ACCEPTABLE = 406;

    /** 
     * This status code indicates that the client must first authenticate 
     * itself with the proxy. 
     * 
     * Reference: [RFC9110, Section 15.5.8](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.8)
     */
    case PROXY_AUTHENTICATION_REQUIRED = 407;

    /** 
     * This status code indicates that the server would like to shut down 
     * this unused connection. 
     * 
     * Reference: [RFC9110, Section 15.5.9](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.9)
     */
    case REQUEST_TIMEOUT = 408;

    /** 
     * This status code indicates that the request could not be processed 
     * because of conflict in the request. 
     * 
     * Reference: [RFC9110, Section 15.5.10](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.10)
     */
    case CONFLICT = 409;

    /** 
     * This status code indicates that the resource requested is no longer 
     * available and will not be available again. 
     * 
     * Reference: [RFC9110, Section 15.5.11](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.11)
     */
    case GONE = 410;

    /** 
     * This status code indicates that the server refuses to accept the 
     * request without a defined Content-Length. 
     * 
     * Reference: [RFC9110, Section 15.5.12](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.12)
     */
    case LENGTH_REQUIRED = 411;

    /** 
     * This status code indicates that one or more conditions given in 
     * the request header fields evaluated to false when tested on the 
     * server. 
     * 
     * Reference: [RFC9110, Section 15.5.13](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.13)
     */
    case PRECONDITION_FAILED = 412;

    /** 
     * This status code indicates that the request is larger than the 
     * server is willing or able to process. 
     * 
     * Reference: [RFC9110, Section 15.5.14](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.14)
     */
    case PAYLOAD_TOO_LARGE = 413;

    /** 
     * This status code indicates that the server is refusing to service 
     * the request because the URI is longer than the server is 
     * willing to interpret. 
     * 
     * Reference: [RFC9110, Section 15.5.15](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.15)
     */
    case URI_TOO_LONG = 414;

    /** 
     * This status code indicates that the media format of the requested 
     * data is not supported by the server. 
     * 
     * Reference: [RFC9110, Section 15.5.16](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.16)
     */
    case UNSUPPORTED_MEDIA_TYPE = 415;

    /** 
     * This status code indicates that the server cannot serve the 
     * requested byte range because the file is shorter than the 
     * requested range. 
     * 
     * Reference: [RFC9110, Section 15.5.17](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.17)
     */
    case RANGE_NOT_SATISFIABLE = 416;

    /** 
     * This status code indicates that the server cannot meet the 
     * requirements of the Expect request-header field. 
     * 
     * Reference: [RFC9110, Section 15.5.18](https://datatracker.ietf.org/doc/html/rfc9110#section-15.5.18)
     */
    case EXPECTATION_FAILED = 417;

    /** 
     * Any attempt to instruct a teapot to brew coffee should fail 
     * with an HTTP 418 error. This is an April Fools' joke defined 
     * in RFC 2324. 
     * 
     * Reference: [RFC2324](https://datatracker.ietf.org/doc/html/rfc2324)
     */
    case IM_A_TEAPOT = 418;

    /** 
     * This status code indicates that the request was directed at a 
     * server that is not able to produce a response. 
     * 
     * Reference: [RFC7540, Section 9.1.2](https://datatracker.ietf.org/doc/html/rfc7540#section-9.1.2)
     */
    case MISDIRECTED_REQUEST = 421;

    /** 
     * This status code indicates that the request was well-formed, 
     * but was unable to be followed due to semantic errors. 
     * 
     * Reference: [RFC4918](https://datatracker.ietf.org/doc/html/rfc4918)
     */
    case UNPROCESSABLE_ENTITY = 422;

    /** 
     * This status code indicates that the resource that is being accessed 
     * is locked. 
     * 
     * Reference: [RFC4918](https://datatracker.ietf.org/doc/html/rfc4918)
     */
    case LOCKED = 423;

    /** 
     * This status code indicates that the request failed due to failure 
     * of a previous request. 
     * 
     * Reference: [RFC4918](https://datatracker.ietf.org/doc/html/rfc4918)
     */
    case FAILED_DEPENDENCY = 424;

    /** 
     * This status code indicates that the server refuses to perform the 
     * request using the current protocol but might be willing to do so 
     * if the client upgrades to a different protocol. 
     * 
     * Reference: [RFC7540, Section 9.1.2](https://datatracker.ietf.org/doc/html/rfc7540#section-9.1.2)
     */
    case UPGRADE_REQUIRED = 426;

    /** 
     * This status code indicates that the origin server requires the 
     * request to be conditional. 
     * 
     * Reference: [RFC6585](https://datatracker.ietf.org/doc/html/rfc6585)
     */
    case PRECONDITION_REQUIRED = 428;

    /** 
     * This status code indicates that the user has sent too many 
     * requests in a given amount of time. 
     * 
     * Reference: [RFC6585](https://datatracker.ietf.org/doc/html/rfc6585)
     */
    case TOO_MANY_REQUESTS = 429;

    /** 
     * This status code indicates that the server is unwilling to 
     * process the request because its header fields are too large. 
     * 
     * Reference: [RFC6585](https://datatracker.ietf.org/doc/html/rfc6585)
     */
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;


    // Server error responses


    /** 
     * This status code indicates that the server encountered an 
     * unexpected condition that prevented it from fulfilling the 
     * request. 
     * 
     * Reference: [RFC9110, Section 15.6.1](https://datatracker.ietf.org/doc/html/rfc9110#section-15.6.1)
     */
    case INTERNAL_SERVER_ERROR = 500;

    /** 
     * This status code indicates that the server does not support 
     * the functionality required to fulfill the request. 
     * 
     * Reference: [RFC9110, Section 15.6.2](https://datatracker.ietf.org/doc/html/rfc9110#section-15.6.2)
     */
    case NOT_IMPLEMENTED = 501;

    /** 
     * This status code indicates that the server, while acting as a 
     * gateway or proxy, received an invalid response from the 
     * upstream server. 
     * 
     * Reference: [RFC9110, Section 15.6.3](https://datatracker.ietf.org/doc/html/rfc9110#section-15.6.3)
     */
    case BAD_GATEWAY = 502;

    /** 
     * This status code indicates that the server is currently unable 
     * to handle the request due to temporary overloading or 
     * maintenance of the server. 
     * 
     * Reference: [RFC9110, Section 15.6.4](https://datatracker.ietf.org/doc/html/rfc9110#section-15.6.4)
     */
    case SERVICE_UNAVAILABLE = 503;

    /** 
     * This status code indicates that the server, while acting as a 
     * gateway or proxy, did not receive a timely response from the 
     * upstream server. 
     * 
     * Reference: [RFC9110, Section 15.6.5](https://datatracker.ietf.org/doc/html/rfc9110#section-15.6.5)
     */
    case GATEWAY_TIMEOUT = 504;

    /** 
     * This status code indicates that the server does not support 
     * the HTTP protocol version that was used in the request. 
     * 
     * Reference: [RFC9110, Section 15.6.6](https://datatracker.ietf.org/doc/html/rfc9110#section-15.6.6)
     */
    case HTTP_VERSION_NOT_SUPPORTED = 505;

    /** 
     * This status code indicates that the server has an internal 
     * configuration error: transparent content negotiation for the 
     * request results in a circular reference. 
     * 
     * Reference: [RFC2295](https://datatracker.ietf.org/doc/html/rfc2295)
     */
    case VARIANT_ALSO_NEGOTIATES = 506;

    /** 
     * This status code indicates that the server is unable to store 
     * the representation needed to complete the request. 
     * 
     * Reference: [RFC4918](https://datatracker.ietf.org/doc/html/rfc4918)
     */
    case INSUFFICIENT_STORAGE = 507;

    /** 
     * This status code indicates that the server detected an infinite 
     * loop while processing a request. 
     * 
     * Reference: [RFC5842](https://datatracker.ietf.org/doc/html/rfc5842)
     */
    case LOOP_DETECTED = 508;

    /** 
     * This status code indicates that further extensions to the request 
     * are required for the server to fulfill it. 
     * 
     * Reference: [RFC2774](https://datatracker.ietf.org/doc/html/rfc2774)
     */
    case NOT_EXTENDED = 510;
}

enum Header: string
{
    /** 
     * The MIME type of the body of the request (used with POST and PUT requests).
     * Reference: [RFC7231, Section 3.1.1.5](https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.1.5)
     */
    case CONTENT_TYPE = 'Content-Type';

    /** 
     * The size of the body in octets (8-bit bytes).
     * Reference: [RFC7230, Section 3.3.2](https://datatracker.ietf.org/doc/html/rfc7230#section-3.3.2)
     */
    case CONTENT_LENGTH = 'Content-Length';

    /** 
     * The type of encoding used on the data.
     * Reference: [RFC7231, Section 3.1.2.2](https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.2.2)
     */
    case CONTENT_ENCODING = 'Content-Encoding';

    /** 
     * The natural language or languages of the intended audience for the enclosed content.
     * Reference: [RFC7231, Section 3.1.3.2](https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.3.2)
     */
    case CONTENT_LANGUAGE = 'Content-Language';

    /** 
     * A location where the content of the request/response is located.
     * Reference: [RFC7231, Section 3.1.4.2](https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.4.2)
     */
    case CONTENT_LOCATION = 'Content-Location';

    /** 
     * Indicates if the content is expected to be displayed inline or as an attachment.
     * Reference: [RFC6266](https://datatracker.ietf.org/doc/html/rfc6266)
     */
    case CONTENT_DISPOSITION = 'Content-Disposition';

    /** 
     * A Base64-encoded binary MD5 sum of the content of the request body.
     * Reference: [RFC1864](https://datatracker.ietf.org/doc/html/rfc1864)
     */
    case CONTENT_MD5 = 'Content-MD5';

    /** 
     * A mechanism for web applications to control resources the user agent is allowed to load.
     * Reference: [CSP Specification](https://w3c.github.io/webappsec-csp/)
     */
    case CONTENT_SECURITY_POLICY = 'Content-Security-Policy';

    /** 
     * Used to prevent MIME types security risks by declaring the intended content type.
     * Reference: [RFC7034](https://datatracker.ietf.org/doc/html/rfc7034)
     */
    case CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';

    /** 
     * Specifies the encoding transformation that has been applied to the message body.
     * Reference: [RFC2045](https://datatracker.ietf.org/doc/html/rfc2045)
     */
    case CONTENT_TRANSFER_ENCODING = 'Content-Transfer-Encoding';

    /** 
     * Indicates the policy that will be enforced by browsers regarding content security, but only in a reporting mode.
     * Reference: [CSP Specification](https://w3c.github.io/webappsec-csp/)
     */
    case CONTENT_SECURITY_POLICY_REPORT_ONLY = 'Content-Security-Policy-Report-Only';

    /** 
     * Specifies a URI to which the user agent sends reports about policy violations.
     * Reference: [CSP Specification](https://w3c.github.io/webappsec-csp/)
     */
    case CONTENT_SECURITY_POLICY_REPORT_URI = 'Content-Security-Policy-Report-URI';

    /** 
     * Custom or experimental header containing information about the content.
     * Reference: [Custom Use]
     */
    case CONTENT_INFO = 'Content-Info';

    /** 
     * Indicates where in a full body message a partial message belongs.
     * Reference: [RFC7233, Section 4.2](https://datatracker.ietf.org/doc/html/rfc7233#section-4.2)
     */
    case CONTENT_RANGE = 'Content-Range';

    /** 
     * Used to describe different variants of the same resource.
     * Reference: [Custom Use]
     */
    case CONTENT_VARIANT = 'Content-Variant';

    /** 
     * Directives for caching mechanisms in both requests and responses.
     * Reference: [RFC7234, Section 5.2](https://datatracker.ietf.org/doc/html/rfc7234#section-5.2)
     */
    case CACHE_CONTROL = 'Cache-Control';

    /** 
     * Allows the sender to include additional information about the connection.
     * Reference: [RFC7230, Section 6.1](https://datatracker.ietf.org/doc/html/rfc7230#section-6.1)
     */
    case CONNECTION = 'Connection';

    /** 
     * The date and time at which the message was originated.
     * Reference: [RFC7231, Section 7.1.1.2](https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.1.2)
     */
    case DATE = 'Date';

    /** 
     * The user agent's preferred languages for the response.
     * Reference: [RFC7231, Section 5.3.5](https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.5)
     */
    case ACCEPT_LANGUAGE = 'Accept-Language';

    /** 
     * Informs the server of acceptable formats for the response.
     * Reference: [RFC7231, Section 5.3.2](https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.2)
     */
    case ACCEPT = 'Accept';

    /** 
     * Indicates the origin(s) that are allowed to access the response.
     * Reference: [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS)
     */
    case ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';

    /** 
     * Contains the credentials to authenticate a user agent with a server.
     * Reference: [RFC7235, Section 4.2](https://datatracker.ietf.org/doc/html/rfc7235#section-4.2)
     */
    case AUTHORIZATION = 'Authorization';

    /** 
     * Contains information about the software used by the originating client.
     * Reference: [RFC7231, Section 5.5.3](https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.3)
     */
    case USER_AGENT = 'User-Agent';

    /** 
     * Used to specify the domain that the cookie belongs to.
     * Reference: [RFC6265, Section 4.1.2.3](https://datatracker.ietf.org/doc/html/rfc6265#section-4.1.2.3)
     */
    case COOKIE = 'Cookie';

    /** 
     * Indicates the URL to redirect a page to.
     * Reference: [RFC7231, Section 7.1.2](https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.2)
     */
    case LOCATION = 'Location';

    /** 
     * Indicates that the response must be made over a secure connection (HTTPS).
     * Reference: [HSTS Specification](https://datatracker.ietf.org/doc/html/rfc6797)
     */
    case STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
}

enum ContentType: string
{
        // Application Types
    case APPLICATION_JSON = 'application/json';
    case APPLICATION_JAVASCRIPT = 'application/javascript';
    case APPLICATION_XML = 'application/xml';
    case APPLICATION_PDF = 'application/pdf';
    case APPLICATION_ZIP = 'application/zip';
    case APPLICATION_GZIP = 'application/gzip';
    case APPLICATION_MSWORD = 'application/msword';
    case APPLICATION_VND_MS_EXCEL = 'application/vnd.ms-excel';
    case APPLICATION_VND_MS_POWERPOINT = 'application/vnd.ms-powerpoint';
    case APPLICATION_OCTET_STREAM = 'application/octet-stream';
    case APPLICATION_RTF = 'application/rtf';
    case APPLICATION_VND_API_JSON = 'application/vnd.api+json';
    case APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';

        // Audio Types
    case AUDIO_AAC = 'audio/aac';
    case AUDIO_MIDI = 'audio/midi';
    case AUDIO_MP3 = 'audio/mpeg';
    case AUDIO_OGG = 'audio/ogg';
    case AUDIO_WAV = 'audio/wav';
    case AUDIO_WEBM = 'audio/webm';
    case AUDIO_FLAC = 'audio/flac';

        // Example Type
    case EXAMPLE = 'example';

        // Font Types
    case FONT_WOFF = 'font/woff';
    case FONT_WOFF2 = 'font/woff2';
    case FONT_TTF = 'font/ttf';
    case FONT_OTF = 'font/otf';

        // Haptic Types
    case HAPTICS_IVS = 'haptics/ivs';

        // Image Types
    case IMAGE_BMP = 'image/bmp';
    case IMAGE_GIF = 'image/gif';
    case IMAGE_JPEG = 'image/jpeg';
    case IMAGE_PNG = 'image/png';
    case IMAGE_SVG_XML = 'image/svg+xml';
    case IMAGE_WEBP = 'image/webp';
    case IMAGE_TIFF = 'image/tiff';

        // Message Types
    case MESSAGE_HTTP = 'message/http';
    case MESSAGE_IMDN_XML = 'message/imdn+xml';
    case MESSAGE_PARTIAL = 'message/partial';
    case MESSAGE_RFC822 = 'message/rfc822';

        // Model Types
    case MODEL_MESH = 'model/mesh';
    case MODEL_GLB = 'model/gltf-binary';
    case MODEL_GLTF = 'model/gltf+json';
    case MODEL_STL = 'model/stl';

        // Multipart Types
    case MULTIPART_FORM_DATA = 'multipart/form-data';
    case MULTIPART_BYTERANGES = 'multipart/byteranges';
    case MULTIPART_MIXED = 'multipart/mixed';
    case MULTIPART_ALTERNATIVE = 'multipart/alternative';

        // Text Types
    case TEXT_CSV = 'text/csv';
    case TEXT_HTML = 'text/html';
    case TEXT_PLAIN = 'text/plain';
    case TEXT_RICHTEXT = 'text/richtext';
    case TEXT_XML = 'text/xml';
    case TEXT_CSS = 'text/css';
    case TEXT_JAVASCRIPT = 'text/javascript';

        // Video Types
    case VIDEO_H264 = 'video/H264';
    case VIDEO_MP4 = 'video/mp4';
    case VIDEO_MPEG = 'video/mpeg';
    case VIDEO_OGG = 'video/ogg';
    case VIDEO_WEBM = 'video/webm';
    case VIDEO_QUICKTIME = 'video/quicktime';
}


class Router
{
    public $routes = [];
    private $basePath;

    public function __construct($basePath)
    {
        $this->basePath = rtrim($basePath, '/'); // Set base path, ensure no trailing slash
    }

    public function nest() {}

    public function get($route, $handler)
    {
        $this->routes[$route]['GET'] = $handler;
    }

    public function post($route, $handler)
    {
        $this->routes[$route]['POST'] = $handler;
    }

    public function put($route, $handler)
    {
        $this->routes[$route]['PUT'] = $handler;
    }

    public function head($route, $handler)
    {
        $this->routes[$route]['HEAD'] = $handler;
    }

    public function delete($route, $handler)
    {
        $this->routes[$route]['DELETE'] = $handler;
    }

    public function options($route, $handler)
    {
        $this->routes[$route]['OPTIONS'] = $handler;
    }

    public function patch($route, $handler)
    {
        $this->routes[$route]['PATCH'] = $handler;
    }

    public function trace($route, $handler)
    {
        $this->routes[$route]['TRACE'] = $handler;
    }

    public function connect($route, $handler)
    {
        $this->routes[$route]['CONNECT'] = $handler;
    }

    public function listen()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $params = $_GET;
        $body = $this->getRequestBody();

        // Remove base path from the request URI
        $route = strtok(str_replace($this->basePath, '', $_SERVER['REQUEST_URI']), '?'); // Remove base path and query string

        if (isset($this->routes[$route][$method])) {
            $handler = $this->routes[$route][$method];
            // Call the handler with parameters and body
            call_user_func($handler, $params, $body);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    private function getRequestBody()
    {
        $body = file_get_contents('php://input');

        return json_decode($body, true);
    }
}
