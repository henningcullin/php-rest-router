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
     * Reference: [RFC9110, Section 15.2.1] 
     */
    case CONTINUE = 100;

    /** 
     * This response code indicates that the server is switching 
     * protocols as requested by the client. 
     */
    case SWITCHING_PROTOCOLS = 101; // [RFC9110, Section 15.2.2]

    /** 
     * This status code indicates that the server has received and 
     * is processing the request, but no response is available yet. 
     */
    case PROCESSING = 102; // WebDAV [RFC2518]

    /** 
     * This status code is used to return some response headers 
     * before the final response, often used for preloading. 
     */
    case EARLY_HINTS = 103; // [RFC8297]


    // Successful responses
    /** 
     * The request has succeeded. The meaning of the success depends 
     * on the HTTP method used. 
     */
    case OK = 200; // [RFC9110, Section 15.3.1]

    /** 
     * The request has been fulfilled, resulting in the creation of 
     * a new resource. 
     */
    case CREATED = 201; // [RFC9110, Section 15.3.2]

    /** 
     * The request has been accepted for processing, but the processing 
     * has not been completed. 
     */
    case ACCEPTED = 202; // [RFC9110, Section 15.3.3]

    /** 
     * The request was successful but the returned meta-information 
     * is not the definitive set of information. 
     */
    case NON_AUTHORITATIVE_INFORMATION = 203; // [RFC9110, Section 15.3.4]

    /** 
     * The server successfully processed the request, but is not returning 
     * any content. 
     */
    case NO_CONTENT = 204; // [RFC9110, Section 15.3.5]

    /** 
     * The server successfully processed the request, but is not returning 
     * any content, and requires that the requester reset the document view. 
     */
    case RESET_CONTENT = 205; // [RFC9110, Section 15.3.6]

    /** 
     * The server is delivering only part of the resource due to a range 
     * header sent by the client. 
     */
    case PARTIAL_CONTENT = 206; // [RFC9110, Section 15.3.7]

    /** 
     * This status code provides information about multiple resources 
     * in situations where multiple status codes might be appropriate. 
     */
    case MULTI_STATUS = 207; // [RFC4918]

    /** 
     * This status code indicates that the members of a DAV binding 
     * have already been enumerated in a previous reply. 
     */
    case ALREADY_REPORTED = 208; // [RFC5842]

    /** 
     * The server has fulfilled a GET request for the resource, and 
     * the response is a representation of the result of one or more 
     * instance-manipulations applied to the current instance. 
     */
    case IM_USED = 226; // [RFC3229]


    // Redirection messages

    /** 
     * This status code indicates multiple options for the resource 
     * that the client may follow. 
     */
    case MULTIPLE_CHOICES = 300; // [RFC9110, Section 15.4.1]

    /** 
     * This status code indicates that the resource has been permanently 
     * moved to a new URI. 
     */
    case MOVED_PERMANENTLY = 301; // [RFC9110, Section 15.4.2]

    /** 
     * This status code indicates that the resource is temporarily 
     * located at a different URI. 
     */
    case FOUND = 302; // [RFC9110, Section 15.4.3]

    /** 
     * This status code indicates that the response to the request can 
     * be found at another URI using the GET method. 
     */
    case SEE_OTHER = 303; // [RFC9110, Section 15.4.4]

    /** 
     * This status code indicates that the resource has not been modified 
     * since the last request. 
     */
    case NOT_MODIFIED = 304; // [RFC9110, Section 15.4.5]

    /** 
     * This status code indicates that the requested resource must be 
     * accessed through the proxy given by the location field. 
     */
    case USE_PROXY = 305; // [RFC9110, Section 15.4.6]

    /** 
     * This status code indicates that the resource is temporarily located 
     * at a different URI. The client must use the same method for the 
     * next request. 
     */
    case TEMPORARY_REDIRECT = 307; // [RFC9110, Section 15.4.8]

    /** 
     * This status code indicates that the resource has been permanently 
     * moved to a new URI, and the same method should be used for 
     * future requests. 
     */
    case PERMANENT_REDIRECT = 308; // [RFC9110, Section 15.4.9]


    // Client error responses
    /** 
     * The server could not understand the request due to invalid syntax. 
     */
    case BAD_REQUEST = 400; // [RFC9110, Section 15.5.1]

    /** 
     * This status code indicates that the request requires user 
     * authentication. 
     */
    case UNAUTHORIZED = 401; // [RFC9110, Section 15.5.2]

    /** 
     * This status code is reserved for future use and is not widely used. 
     */
    case PAYMENT_REQUIRED = 402; // [RFC9110, Section 15.5.3]

    /** 
     * The server understood the request, but refuses to authorize it. 
     */
    case FORBIDDEN = 403; // [RFC9110, Section 15.5.4]

    /** 
     * The server can't find the requested resource. 
     */
    case NOT_FOUND = 404; // [RFC9110, Section 15.5.5]

    /** 
     * The method specified in the request is not allowed for the resource. 
     */
    case METHOD_NOT_ALLOWED = 405; // [RFC9110, Section 15.5.6]

    /** 
     * The server cannot produce a response matching the criteria 
     * given in the request's headers. 
     */
    case NOT_ACCEPTABLE = 406; // [RFC9110, Section 15.5.7]

    /** 
     * This status code indicates that the client must first authenticate 
     * itself with the proxy. 
     */
    case PROXY_AUTHENTICATION_REQUIRED = 407; // [RFC9110, Section 15.5.8]

    /** 
     * This status code indicates that the server would like to shut down 
     * this unused connection. 
     */
    case REQUEST_TIMEOUT = 408; // [RFC9110, Section 15.5.9]

    /** 
     * This status code indicates that the request could not be processed 
     * because of conflict in the request. 
     */
    case CONFLICT = 409; // [RFC9110, Section 15.5.10]

    /** 
     * This status code indicates that the resource requested is no longer 
     * available and will not be available again. 
     */
    case GONE = 410; // [RFC9110, Section 15.5.11]

    /** 
     * This status code indicates that the server refuses to accept the 
     * request without a defined Content-Length. 
     */
    case LENGTH_REQUIRED = 411; // [RFC9110, Section 15.5.12]

    /** 
     * This status code indicates that one or more conditions given in 
     * the request header fields evaluated to false when tested on the 
     * server. 
     */
    case PRECONDITION_FAILED = 412; // [RFC9110, Section 15.5.13]

    /** 
     * This status code indicates that the request is larger than the 
     * server is willing or able to process. 
     */
    case PAYLOAD_TOO_LARGE = 413; // [RFC9110, Section 15.5.14]

    /** 
     * This status code indicates that the server is refusing to service 
     * the request because the URI is longer than the server is 
     * willing to interpret. 
     */
    case URI_TOO_LONG = 414; // [RFC9110, Section 15.5.15]

    /** 
     * This status code indicates that the media format of the requested 
     * data is not supported by the server. 
     */
    case UNSUPPORTED_MEDIA_TYPE = 415; // [RFC9110, Section 15.5.16]

    /** 
     * This status code indicates that the server cannot serve the 
     * requested byte range because the file is shorter than the 
     * requested range. 
     */
    case RANGE_NOT_SATISFIABLE = 416; // [RFC9110, Section 15.5.17]

    /** 
     * This status code indicates that the server cannot meet the 
     * requirements of the Expect request-header field. 
     */
    case EXPECTATION_FAILED = 417; // [RFC9110, Section 15.5.18]

    /** 
     * Any attempt to instruct an teapot to brew coffee should fail 
     * with an HTTP 418 error. This is an April Fools' joke defined 
     * in RFC 2324. 
     */
    case IM_A_TEAPOT = 418; // [RFC2324]

    /** 
     * This status code indicates that the request was directed at a 
     * server that is not able to produce a response. 
     */
    case MISDIRECTED_REQUEST = 421; // [RFC7540, Section 9.1.2]

    /** 
     * This status code indicates that the request was well-formed, 
     * but was unable to be followed due to semantic errors. 
     */
    case UNPROCESSABLE_ENTITY = 422; // [RFC4918]

    /** 
     * This status code indicates that the resource that is being accessed 
     * is locked. 
     */
    case LOCKED = 423; // [RFC4918]

    /** 
     * This status code indicates that the request failed due to failure 
     * of a previous request. 
     */
    case FAILED_DEPENDENCY = 424; // [RFC4918]

    /** 
     * This status code indicates that the server refuses to perform the 
     * request using the current protocol but might be willing to do so 
     * if the client upgrades to a different protocol. 
     */
    case UPGRADE_REQUIRED = 426; // [RFC7540, Section 9.1.2]

    /** 
     * This status code indicates that the origin server requires the 
     * request to be conditional. 
     */
    case PRECONDITION_REQUIRED = 428; // [RFC6585]

    /** 
     * This status code indicates that the user has sent too many 
     * requests in a given amount of time. 
     */
    case TOO_MANY_REQUESTS = 429; // [RFC6585]

    /** 
     * This status code indicates that the server is unwilling to 
     * process the request because its header fields are too large. 
     */
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431; // [RFC6585]


    // Server error responses

    /** 
     * This status code indicates that the server encountered an 
     * unexpected condition that prevented it from fulfilling the 
     * request. 
     */
    case INTERNAL_SERVER_ERROR = 500; // [RFC9110, Section 15.6.1]

    /** 
     * This status code indicates that the server does not support 
     * the functionality required to fulfill the request. 
     */
    case NOT_IMPLEMENTED = 501; // [RFC9110, Section 15.6.2]

    /** 
     * This status code indicates that the server, while acting as a 
     * gateway or proxy, received an invalid response from the 
     * upstream server. 
     */
    case BAD_GATEWAY = 502; // [RFC9110, Section 15.6.3]

    /** 
     * This status code indicates that the server is currently unable 
     * to handle the request due to temporary overloading or 
     * maintenance of the server. 
     */
    case SERVICE_UNAVAILABLE = 503; // [RFC9110, Section 15.6.4]

    /** 
     * This status code indicates that the server, while acting as a 
     * gateway or proxy, did not receive a timely response from the 
     * upstream server. 
     */
    case GATEWAY_TIMEOUT = 504; // [RFC9110, Section 15.6.5]

    /** 
     * This status code indicates that the server does not support 
     * the HTTP protocol version that was used in the request. 
     */
    case HTTP_VERSION_NOT_SUPPORTED = 505; // [RFC9110, Section 15.6.6]

    /** 
     * This status code indicates that the server has an internal 
     * configuration error: transparent content negotiation for the 
     * request results in a circular reference. 
     */
    case VARIANT_ALSO_NEGOTIATES = 506; // [RFC2295]

    /** 
     * This status code indicates that the server is unable to store 
     * the representation needed to complete the request. 
     */
    case INSUFFICIENT_STORAGE = 507; // [RFC4918]

    /** 
     * This status code indicates that the server detected an infinite 
     * loop while processing a request. 
     */
    case LOOP_DETECTED = 508; // [RFC5842]

    /** 
     * This status code indicates that further extensions to the request 
     * are required for the server to fulfill it.
     * 
     * Reference: [RFC2774] 
     */
    case NOT_EXTENDED = 510;
}

enum ContentHeader: string
{
    case CONTENT_TYPE = 'Content-Type';
    case CONTENT_LENGTH = 'Content-Length';
    case CONTENT_ENCODING = 'Content-Encoding';
    case CONTENT_LANGUAGE = 'Content-Language';
    case CONTENT_LOCATION = 'Content-Location';
    case CONTENT_DISPOSITION = 'Content-Disposition';
    case CONTENT_MD5 = 'Content-MD5';
    case CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    case CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';
    case CONTENT_TRANSFER_ENCODING = 'Content-Transfer-Encoding';
    case CONTENT_SECURITY_POLICY_REPORT_ONLY = 'Content-Security-Policy-Report-Only';
    case CONTENT_SECURITY_POLICY_REPORT_URI = 'Content-Security-Policy-Report-URI';
    case CONTENT_INFO = 'Content-Info'; // Custom or less common headers
    case CONTENT_RANGE = 'Content-Range'; // Used for range requests
    case CONTENT_VARIANT = 'Content-Variant'; // Custom or less common headers
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
    private $params = [];
    private $body = [];

    public $routes = [];

    public function nest() {}

    public function get() {}

    public function post() {}

    public function put() {}

    public function head() {}

    public function delete() {}

    public function options() {}

    public function patch() {}

    public function trace() {}

    public function connect() {}
}
