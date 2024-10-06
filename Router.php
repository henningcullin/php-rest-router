<?php

enum Method: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case HEAD = 'HEAD';
    case DELETE = 'DELETE';
    case OPTIONS = 'OPTIONS';
    case PATCH = 'PATCH';
    case TRACE = 'TRACE';
    case CONNECT = 'CONNECT';
}

enum StatusCode: int
{
    // Informational responses

    /** 
     * This interim response indicates that everything so far is OK 
     * and that the client should continue with the request or ignore 
     * it if it is already finished. 
     */
    case CONTINUE = 100; // [RFC9110, Section 15.2.1]

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
     */
    case NOT_EXTENDED = 510; // [RFC2774]
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
    case CONTENT_RANGE = 'Content-Range';
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
    case APPLICATION_1D_INTERLEAVED_PARITYFEC = 'application/1d-interleaved-parityfec';
    case APPLICATION_3GPDASH_QOE_REPORT_XML = 'application/3gpdash-qoe-report+xml';
    case APPLICATION_3GPPHAL_JSON = 'application/3gppHal+json';
    case APPLICATION_3GPPHALFORMS_JSON = 'application/3gppHalForms+json';
    case APPLICATION_3GPP_IMS_XML = 'application/3gpp-ims+xml';
    case APPLICATION_A2L = 'application/A2L';
    case APPLICATION_ACE_GROUPCOMM_CBOR = 'application/ace-groupcomm+cbor';
    case APPLICATION_ACE_CBOR = 'application/ace+cbor';
    case APPLICATION_ACE_JSON = 'application/ace+json';
    case APPLICATION_ACTIVEMESSAGE = 'application/activemessage';
    case APPLICATION_ACTIVITY_JSON = 'application/activity+json';
    case APPLICATION_AIF_CBOR = 'application/aif+cbor';
    case APPLICATION_AIF_JSON = 'application/aif+json';
    case APPLICATION_ALTO_CDNI_JSON = 'application/alto-cdni+json';
    case APPLICATION_ALTO_CDNIFILTER_JSON = 'application/alto-cdnifilter+json';
    case APPLICATION_ALTO_COSTMAP_JSON = 'application/alto-costmap+json';
    case APPLICATION_ALTO_COSTMAPFILTER_JSON = 'application/alto-costmapfilter+json';
    case APPLICATION_ALTO_DIRECTORY_JSON = 'application/alto-directory+json';
    case APPLICATION_ALTO_ENDPOINTPROP_JSON = 'application/alto-endpointprop+json';
    case APPLICATION_ALTO_ENDPOINTPROPPARAMS_JSON = 'application/alto-endpointpropparams+json';
    case APPLICATION_ALTO_ENDPOINTCOST_JSON = 'application/alto-endpointcost+json';
    case APPLICATION_ALTO_ENDPOINTCOSTPARAMS_JSON = 'application/alto-endpointcostparams+json';
    case APPLICATION_ALTO_ERROR_JSON = 'application/alto-error+json';
    case APPLICATION_ALTO_NETWORKMAPFILTER_JSON = 'application/alto-networkmapfilter+json';
    case APPLICATION_ALTO_NETWORKMAP_JSON = 'application/alto-networkmap+json';
    case APPLICATION_ALTO_PROPMAP_JSON = 'application/alto-propmap+json';
    case APPLICATION_ALTO_PROPMAPPARAMS_JSON = 'application/alto-propmapparams+json';
    case APPLICATION_ALTO_TIPS_JSON = 'application/alto-tips+json';
    case APPLICATION_ALTO_TIPSPARAMS_JSON = 'application/alto-tipsparams+json';
    case APPLICATION_ALTO_UPDATESTREAMCONTROL_JSON = 'application/alto-updatestreamcontrol+json';
    case APPLICATION_ALTO_UPDATESTREAMPARAMS_JSON = 'application/alto-updatestreamparams+json';
    case APPLICATION_AML = 'application/AML';
    case APPLICATION_ANDREW_INSET = 'application/andrew-inset';
    case APPLICATION_APPLEFILE = 'application/applefile';
    case APPLICATION_AT_JWT = 'application/at+jwt';
    case APPLICATION_ATF = 'application/ATF';
    case APPLICATION_ATFX = 'application/ATFX';
    case APPLICATION_ATOM_XML = 'application/atom+xml';
    case APPLICATION_ATOMCAT_XML = 'application/atomcat+xml';
    case APPLICATION_ATOMDELETED_XML = 'application/atomdeleted+xml';
    case APPLICATION_ATOMICMAIL = 'application/atomicmail';
    case APPLICATION_ATOMSVC_XML = 'application/atomsvc+xml';
    case APPLICATION_ATSC_DWD_XML = 'application/atsc-dwd+xml';
    case APPLICATION_ATSC_DYNAMIC_EVENT_MESSAGE = 'application/atsc-dynamic-event-message';
    case APPLICATION_ATSC_HELD_XML = 'application/atsc-held+xml';
    case APPLICATION_ATSC_RDT_JSON = 'application/atsc-rdt+json';
    case APPLICATION_ATSC_RSAT_XML = 'application/atsc-rsat+xml';
    case APPLICATION_ATXML = 'application/ATXML';
    case APPLICATION_AUTH_POLICY_XML = 'application/auth-policy+xml';
    case APPLICATION_AUTOMATIONML_AML_XML = 'application/automationml-aml+xml';
    case APPLICATION_AUTOMATIONML_AMLX_ZIP = 'application/automationml-amlx+zip';
    case APPLICATION_BACNET_XDD_ZIP = 'application/bacnet-xdd+zip';
    case APPLICATION_BATCH_SMTP = 'application/batch-SMTP';
    case APPLICATION_BEEP_XML = 'application/beep+xml';
    case APPLICATION_BUFR = 'application/bufr';
    case APPLICATION_C2PA = 'application/c2pa';
    case APPLICATION_CALENDAR_JSON = 'application/calendar+json';
    case APPLICATION_CALENDAR_XML = 'application/calendar+xml';
    case APPLICATION_CALL_COMPLETION = 'application/call-completion';
    case APPLICATION_CALS_1840 = 'application/CALS-1840';
    case APPLICATION_CAPTIVE_JSON = 'application/captive+json';
    case APPLICATION_CBOR = 'application/cbor';
    case APPLICATION_CBOR_SEQ = 'application/cbor-seq';
    case APPLICATION_CCCEX = 'application/cccex';
    case APPLICATION_CCMP_XML = 'application/ccmp+xml';
    case APPLICATION_CCXML_XML = 'application/ccxml+xml';
    case APPLICATION_CDA_XML = 'application/cda+xml';
    case APPLICATION_CDFX_XML = 'application/CDFX+XML';
    case APPLICATION_CDMI_CAPABILITY = 'application/cdmi-capability';
    case APPLICATION_CDMI_CONTAINER = 'application/cdmi-container';
    case APPLICATION_CDMI_DOMAIN = 'application/cdmi-domain';
    case APPLICATION_CDMI_OBJECT = 'application/cdmi-object';
    case APPLICATION_CDMI_QUEUE = 'application/cdmi-queue';
    case APPLICATION_CDNI = 'application/cdni';
    case APPLICATION_CEA = 'application/CEA';
    case APPLICATION_CEA_2018_XML = 'application/cea-2018+xml';
    case APPLICATION_CELLML_XML = 'application/cellml+xml';
    case APPLICATION_CFW = 'application/cfw';
    case APPLICATION_CID_EDHOC_CBOR_SEQ = 'application/cid-edhoc+cbor-seq';
    case APPLICATION_CITY_JSON = 'application/city+json';
    case APPLICATION_CLR = 'application/clr';
    case APPLICATION_CLUE_INFO_XML = 'application/clue_info+xml';
    case APPLICATION_CLUE_XML = 'application/clue+xml';
    case APPLICATION_CMS = 'application/cms';
    case APPLICATION_CNRP_XML = 'application/cnrp+xml';
    case APPLICATION_COAP_GROUP_JSON = 'application/coap-group+json';
    case APPLICATION_COAP_PAYLOAD = 'application/coap-payload';
    case APPLICATION_COMMONGROUND = 'application/commonground';
    case APPLICATION_CONCISE_PROBLEM_DETAILS_CBOR = 'application/concise-problem-details+cbor';
    case APPLICATION_CONFERENCE_INFO_XML = 'application/conference-info+xml';
    case APPLICATION_CPL_XML = 'application/cpl+xml';
    case APPLICATION_COSE = 'application/cose';
    case APPLICATION_COSE_KEY = 'application/cose-key';
    case APPLICATION_COSE_KEY_SET = 'application/cose-key-set';
    case APPLICATION_COSE_X509 = 'application/cose-x509';
    case APPLICATION_CSRATTRS = 'application/csrattrs';
    case APPLICATION_CSTA_XML = 'application/csta+xml';
    case APPLICATION_CSTADATA_XML = 'application/CSTAdata+xml';
    case APPLICATION_CSVM_JSON = 'application/csvm+json';
    case APPLICATION_CWL = 'application/cwl';
    case APPLICATION_CWL_JSON = 'application/cwl+json';
    case APPLICATION_CWL_YAML = 'application/cwl+yaml';
    case APPLICATION_CWT = 'application/cwt';
    case APPLICATION_CYBERCASH = 'application/cybercash';
    case APPLICATION_DASH_XML = 'application/dash+xml';
    case APPLICATION_DASH_PATCH_XML = 'application/dash-patch+xml';
    case APPLICATION_DASHDELTA = 'application/dashdelta';
    case APPLICATION_DAVMOUNT_XML = 'application/davmount+xml';
    case APPLICATION_DCA_RFT = 'application/dca-rft';
    case APPLICATION_DCD = 'application/DCD';
    case APPLICATION_DEC_DX = 'application/dec-dx';
    case APPLICATION_DIALOG_INFO_XML = 'application/dialog-info+xml';
    case APPLICATION_DICOM = 'application/dicom';
    case APPLICATION_DICOM_JSON = 'application/dicom+json';
    case APPLICATION_DICOM_XML = 'application/dicom+xml';
    case APPLICATION_DII = 'application/DII';
    case APPLICATION_DIT = 'application/DIT';
    case APPLICATION_DNS = 'application/dns';
    case APPLICATION_DNS_JSON = 'application/dns+json';
    case APPLICATION_DNS_MESSAGE = 'application/dns-message';
    case APPLICATION_DOTS_CBOR = 'application/dots+cbor';
    case APPLICATION_DPOP_JWT = 'application/dpop+jwt';
    case APPLICATION_DSKPP_XML = 'application/dskpp+xml';
    case APPLICATION_DSSC_DER = 'application/dssc+der';
    case APPLICATION_DSSC_XML = 'application/dssc+xml';
    case APPLICATION_DVCS = 'application/dvcs';
    case APPLICATION_ECMASCRIPT = 'application/ecmascript';
    case APPLICATION_EDHOC_CBOR_SEQ = 'application/edhoc+cbor-seq';
    case APPLICATION_EDI_CONSENT = 'application/EDI-consent';
    case APPLICATION_EDIFACT = 'application/EDIFACT';
    case APPLICATION_EDI_X12 = 'application/EDI-X12';
    case APPLICATION_EFI = 'application/efi';
    case APPLICATION_ELM_JSON = 'application/elm+json';
    case APPLICATION_ELM_XML = 'application/elm+xml';
    case APPLICATION_EMERGENCYCALLDATA_CAP_XML = 'application/EmergencyCallData.cap+xml';
    case APPLICATION_EMERGENCYCALLDATA_COMMENT_XML = 'application/EmergencyCallData.Comment+xml';
    case APPLICATION_EMERGENCYCALLDATA_CONTROL_XML = 'application/EmergencyCallData.Control+xml';
    case APPLICATION_EMERGENCYCALLDATA_DEVICEINFO_XML = 'application/EmergencyCallData.DeviceInfo+xml';
    case APPLICATION_EMERGENCYCALLDATA_ECALL_MSD = 'application/EmergencyCallData.eCall.MSD';
    case APPLICATION_EMERGENCYCALLDATA_LEGACYESN_JSON = 'application/EmergencyCallData.LegacyESN+json';
    case APPLICATION_EMERGENCYCALLDATA_PROVIDERINFO_XML = 'application/EmergencyCallData.ProviderInfo+xml';
    case APPLICATION_EMERGENCYCALLDATA_SERVICEINFO_XML = 'application/EmergencyCallData.ServiceInfo+xml';
    case APPLICATION_EMERGENCYCALLDATA_SUBSCRIBERINFO_XML = 'application/EmergencyCallData.SubscriberInfo+xml';
    case APPLICATION_EMERGENCYCALLDATA_VEDS_XML = 'application/EmergencyCallData.VEDS+xml';
    case APPLICATION_EMMA_XML = 'application/emma+xml';
    case APPLICATION_EMOTIONML_XML = 'application/emotionml+xml';
    case APPLICATION_ENCAPRTP = 'application/encaprtp';
    case APPLICATION_ENTITY_STATEMENT_JWT = 'application/entity-statement+jwt';
    case APPLICATION_EPP_XML = 'application/epp+xml';
    case APPLICATION_EPUB_ZIP = 'application/epub+zip';
    case APPLICATION_ESHOP = 'application/eshop';
    case APPLICATION_EXAMPLE = 'application/example';
    case APPLICATION_EXI = 'application/exi';
    case APPLICATION_EXPECT_CT_REPORT_JSON = 'application/expect-ct-report+json';
    case APPLICATION_EXPRESS = 'application/express';
    case APPLICATION_FASTINFOSET = 'application/fastinfoset';
    case APPLICATION_FASTSOAP = 'application/fastsoap';
    case APPLICATION_FDF = 'application/fdf';
    case APPLICATION_FDT_XML = 'application/fdt+xml';
    case APPLICATION_FHIR_JSON = 'application/fhir+json';
    case APPLICATION_FHIR_XML = 'application/fhir+xml';
    case APPLICATION_FITS = 'application/fits';
    case APPLICATION_FLEXFEC = 'application/flexfec';
    case APPLICATION_FONT_SFNT = 'application/font-sfnt';
    case APPLICATION_FONT_TDPFR = 'application/font-tdpfr';
    case APPLICATION_FONT_WOFF = 'application/font-woff';
    case APPLICATION_FRAMEWORK_ATTRIBUTES_XML = 'application/framework-attributes+xml';
    case APPLICATION_GEO_JSON = 'application/geo+json';
    case APPLICATION_GEO_JSON_SEQ = 'application/geo+json-seq';
    case APPLICATION_GEOPACKAGE_SQLITE3 = 'application/geopackage+sqlite3';
    case APPLICATION_GEOPOSE_JSON = 'application/geopose+json';
    case APPLICATION_GEOXACML_JSON = 'application/geoxacml+json';
    case APPLICATION_GEOXACML_XML = 'application/geoxacml+xml';
    case APPLICATION_GLTF_BUFFER = 'application/gltf-buffer';
    case APPLICATION_GML_XML = 'application/gml+xml';
    case APPLICATION_GNAP_BINDING_JWS = 'application/gnap-binding-jws';
    case APPLICATION_GNAP_BINDING_JWSD = 'application/gnap-binding-jwsd';
    case APPLICATION_GNAP_BINDING_ROTATION_JWS = 'application/gnap-binding-rotation-jws';
    case APPLICATION_GNAP_BINDING_ROTATION_JWSD = 'application/gnap-binding-rotation-jwsd';
    case APPLICATION_GRIB = 'application/grib';
    case APPLICATION_GZIP = 'application/gzip';
    case APPLICATION_H224 = 'application/H224';
    case APPLICATION_HELD_XML = 'application/held+xml';
    case APPLICATION_HL7V2_XML = 'application/hl7v2+xml';
    case APPLICATION_HTTP = 'application/http';
    case APPLICATION_HYPERSTUDIO = 'application/hyperstudio';
    case APPLICATION_IBE_KEY_REQUEST_XML = 'application/ibe-key-request+xml';
    case APPLICATION_IBE_PKG_REPLY_XML = 'application/ibe-pkg-reply+xml';
    case APPLICATION_IBE_PP_DATA = 'application/ibe-pp-data';
    case APPLICATION_IGES = 'application/iges';
    case APPLICATION_IM_ISCOMPOSING_XML = 'application/im-iscomposing+xml';
    case APPLICATION_INDEX = 'application/index';
    case APPLICATION_INDEX_CMD = 'application/index.cmd';
    case APPLICATION_INDEX_OBJ = 'application/index.obj';
    case APPLICATION_INDEX_RESPONSE = 'application/index.response';
    case APPLICATION_INDEX_VND = 'application/index.vnd';
    case APPLICATION_INKML_XML = 'application/inkml+xml';
    case APPLICATION_IOTP = 'application/IOTP';
    case APPLICATION_IPFIX = 'application/ipfix';
    case APPLICATION_IPP = 'application/ipp';
    case APPLICATION_ISUP = 'application/ISUP';
    case APPLICATION_ITS_XML = 'application/its+xml';
    case APPLICATION_JAVA_ARCHIVE = 'application/java-archive';
    case APPLICATION_JAVASCRIPT = 'application/javascript';
    case APPLICATION_JF2FEED_JSON = 'application/jf2feed+json';
    case APPLICATION_JOSE = 'application/jose';
    case APPLICATION_JOSE_JSON = 'application/jose+json';
    case APPLICATION_JRD_JSON = 'application/jrd+json';
    case APPLICATION_JSCALENDAR_JSON = 'application/jscalendar+json';
    case APPLICATION_JSCONTACT_JSON = 'application/jscontact+json';
    case APPLICATION_JSON = 'application/json';
    case APPLICATION_JSON_PATCH_JSON = 'application/json-patch+json';
    case APPLICATION_JSON_SEQ = 'application/json-seq';
    case APPLICATION_JSONPATH = 'application/jsonpath';
    case APPLICATION_JWK_JSON = 'application/jwk+json';
    case APPLICATION_JWK_SET_JSON = 'application/jwk-set+json';
    case APPLICATION_JWK_SET_JWT = 'application/jwk-set+jwt';
    case APPLICATION_JWT = 'application/jwt';
    case APPLICATION_KPML_REQUEST_XML = 'application/kpml-request+xml';
    case APPLICATION_KPML_RESPONSE_XML = 'application/kpml-response+xml';
    case APPLICATION_LD_JSON = 'application/ld+json';
    case APPLICATION_LGR_XML = 'application/lgr+xml';
    case APPLICATION_LINK_FORMAT = 'application/link-format';
    case APPLICATION_LINKSET = 'application/linkset';
    case APPLICATION_LINKSET_JSON = 'application/linkset+json';
    case APPLICATION_LOAD_CONTROL_XML = 'application/load-control+xml';
    case APPLICATION_LOGOUT_JWT = 'application/logout+jwt';
    case APPLICATION_LOST_XML = 'application/lost+xml';
    case APPLICATION_LOSTSYNC_XML = 'application/lostsync+xml';
    case APPLICATION_LPF_ZIP = 'application/lpf+zip';
    case APPLICATION_LXF = 'application/LXF';
    case APPLICATION_MAC_BINHEX40 = 'application/mac-binhex40';
    case APPLICATION_MACWRITEII = 'application/macwriteii';
    case APPLICATION_MADS_XML = 'application/mads+xml';
    case APPLICATION_MANIFEST_JSON = 'application/manifest+json';
    case APPLICATION_MARC = 'application/marc';
    case APPLICATION_MARCXML_XML = 'application/marcxml+xml';
    case APPLICATION_MATHEMATICA = 'application/mathematica';
    case APPLICATION_MATHML_XML = 'application/mathml+xml';
    case APPLICATION_MATHML_CONTENT_XML = 'application/mathml-content+xml';
    case APPLICATION_MATHML_PRESENTATION_XML = 'application/mathml-presentation+xml';
    case APPLICATION_MBMS_ASSOCIATED_PROCEDURE_DESCRIPTION_XML = 'application/mbms-associated-procedure-description+xml';
    case APPLICATION_MBMS_DEREGISTER_XML = 'application/mbms-deregister+xml';
    case APPLICATION_MBMS_ENVELOPE_XML = 'application/mbms-envelope+xml';
    case APPLICATION_MBMS_MSK_RESPONSE_XML = 'application/mbms-msk-response+xml';
    case APPLICATION_MBMS_MSK_XML = 'application/mbms-msk+xml';
    case APPLICATION_MBMS_PROTECTION_DESCRIPTION_XML = 'application/mbms-protection-description+xml';
    case APPLICATION_MBMS_RECEPTION_REPORT_XML = 'application/mbms-reception-report+xml';
    case APPLICATION_MBMS_REGISTER_RESPONSE_XML = 'application/mbms-register-response+xml';
    case APPLICATION_MBMS_REGISTER_XML = 'application/mbms-register+xml';
    case APPLICATION_MBMS_SCHEDULE_XML = 'application/mbms-schedule+xml';
    case APPLICATION_MBMS_USER_SERVICE_DESCRIPTION_XML = 'application/mbms-user-service-description+xml';
    case APPLICATION_MBOX = 'application/mbox';
    case APPLICATION_MEDIA_CONTROL_XML = 'application/media_control+xml';
    case APPLICATION_MEDIA_POLICY_DATASET_XML = 'application/media-policy-dataset+xml';
    case APPLICATION_MEDIASERVERCONTROL_XML = 'application/mediaservercontrol+xml';
    case APPLICATION_MERGE_PATCH_JSON = 'application/merge-patch+json';
    case APPLICATION_METALINK4_XML = 'application/metalink4+xml';
    case APPLICATION_METS_XML = 'application/mets+xml';
    case APPLICATION_MF4 = 'application/MF4';
    case APPLICATION_MIKEY = 'application/mikey';
    case APPLICATION_MIPC = 'application/mipc';
    case APPLICATION_MISSING_BLOCKS_CBOR_SEQ = 'application/missing-blocks+cbor-seq';
    case APPLICATION_MMT_AEI_XML = 'application/mmt-aei+xml';
    case APPLICATION_MMT_USD_XML = 'application/mmt-usd+xml';
    case APPLICATION_MODS_XML = 'application/mods+xml';
    case APPLICATION_MOSS_KEYS = 'application/moss-keys';
    case APPLICATION_MOSS_SIGNATURE = 'application/moss-signature';
    case APPLICATION_MOSSKEY_DATA = 'application/mosskey-data';
    case APPLICATION_MOSSKEY_REQUEST = 'application/mosskey-request';
    case APPLICATION_MP21 = 'application/mp21';
    case APPLICATION_MP4 = 'application/mp4';
    case APPLICATION_MPEG4_GENERIC = 'application/mpeg4-generic';
    case APPLICATION_MPEG4_IOD = 'application/mpeg4-iod';
    case APPLICATION_MPEG4_IOD_XMT = 'application/mpeg4-iod-xmt';
    case APPLICATION_MRB_CONSUMER_XML = 'application/mrb-consumer+xml';
    case APPLICATION_MRB_PUBLISH_XML = 'application/mrb-publish+xml';
    case APPLICATION_MSC_IVR_XML = 'application/msc-ivr+xml';
    case APPLICATION_MSC_MIXER_XML = 'application/msc-mixer+xml';
    case APPLICATION_MSWORD = 'application/msword';
    case APPLICATION_MUD_JSON = 'application/mud+json';
    case APPLICATION_MULTIPART_CORE = 'application/multipart-core';
    case APPLICATION_MXF = 'application/mxf';
    case APPLICATION_N_QUADS = 'application/n-quads';
    case APPLICATION_N_TRIPLES = 'application/n-triples';
    case APPLICATION_NASDATA = 'application/nasdata';
    case APPLICATION_NEWS_CHECKGROUPS = 'application/news-checkgroups';
    case APPLICATION_NEWS_GROUPINFO = 'application/news-groupinfo';
    case APPLICATION_NEWS_TRANSMISSION = 'application/news-transmission';
    case APPLICATION_NLSML_XML = 'application/nlsml+xml';
    case APPLICATION_NODE = 'application/node';
    case APPLICATION_NSS = 'application/nss';
    case APPLICATION_OAUTH_AUTHZ_REQ_JWT = 'application/oauth-authz-req+jwt';
    case APPLICATION_OBLIVIOUS_DNS_MESSAGE = 'application/oblivious-dns-message';
    case APPLICATION_OCSP_REQUEST = 'application/ocsp-request';
    case APPLICATION_OCSP_RESPONSE = 'application/ocsp-response';
    case APPLICATION_OCTET_STREAM = 'application/octet-stream';
    case APPLICATION_ODA = 'application/ODA';
    case APPLICATION_ODM_XML = 'application/odm+xml';
    case APPLICATION_ODX = 'application/ODX';
    case APPLICATION_OEBPS_PACKAGE_XML = 'application/oebps-package+xml';
    case APPLICATION_OGG = 'application/ogg';
    case APPLICATION_OHTTP_KEYS = 'application/ohttp-keys';
    case APPLICATION_OPC_NODESET_XML = 'application/opc-nodeset+xml';
    case APPLICATION_OSCORE = 'application/oscore';
    case APPLICATION_OXPS = 'application/oxps';
    case APPLICATION_P21 = 'application/p21';
    case APPLICATION_P21_ZIP = 'application/p21+zip';
    case APPLICATION_P2P_OVERLAY_XML = 'application/p2p-overlay+xml';
    case APPLICATION_PARITYFEC = 'application/parityfec';
    case APPLICATION_PASSPORT = 'application/passport';
    case APPLICATION_PATCH_OPS_ERROR_XML = 'application/patch-ops-error+xml';
    case APPLICATION_PDF = 'application/pdf';
    case APPLICATION_PDX = 'application/PDX';
    case APPLICATION_PEM_CERTIFICATE_CHAIN = 'application/pem-certificate-chain';
    case APPLICATION_PGP_ENCRYPTED = 'application/pgp-encrypted';
    case APPLICATION_PGP_KEYS = 'application/pgp-keys';
    case APPLICATION_PGP_SIGNATURE = 'application/pgp-signature';
    case APPLICATION_PIDF_DIFF_XML = 'application/pidf-diff+xml';
    case APPLICATION_PIDF_XML = 'application/pidf+xml';
    case APPLICATION_PKCS10 = 'application/pkcs10';
    case APPLICATION_PKCS7_MIME = 'application/pkcs7-mime';
    case APPLICATION_PKCS7_SIGNATURE = 'application/pkcs7-signature';
    case APPLICATION_PKCS8 = 'application/pkcs8';
    case APPLICATION_PKCS8_ENCRYPTED = 'application/pkcs8-encrypted';
    case APPLICATION_PKCS12 = 'application/pkcs12';
    case APPLICATION_PKIX_ATTR_CERT = 'application/pkix-attr-cert';
    case APPLICATION_PKIX_CERT = 'application/pkix-cert';
    case APPLICATION_PKIX_CRL = 'application/pkix-crl';
    case APPLICATION_PKIX_PKIPATH = 'application/pkix-pkipath';
    case APPLICATION_PKIXCMP = 'application/pkixcmp';
    case APPLICATION_PLS_XML = 'application/pls+xml';
    case APPLICATION_POC_SETTINGS_XML = 'application/poc-settings+xml';
    case APPLICATION_POSTSCRIPT = 'application/postscript';
    case APPLICATION_PPSP_TRACKER_JSON = 'application/ppsp-tracker+json';
    case APPLICATION_PRIVATE_TOKEN_ISSUER_DIRECTORY = 'application/private-token-issuer-directory';
    case APPLICATION_PRIVATE_TOKEN_REQUEST = 'application/private-token-request';
    case APPLICATION_PRIVATE_TOKEN_RESPONSE = 'application/private-token-response';
    case APPLICATION_PROBLEM_JSON = 'application/problem+json';
    case APPLICATION_PROBLEM_XML = 'application/problem+xml';
    case APPLICATION_PROVENANCE_XML = 'application/provenance+xml';
    case APPLICATION_PRS_ALVESTRAND_TITRAX_SHEET = 'application/prs.alvestrand.titrax-sheet';
    case APPLICATION_PRS_CWW = 'application/prs.cww';
    case APPLICATION_PRS_CYN = 'application/prs.cyn';
    case APPLICATION_PRS_HPUB_ZIP = 'application/prs.hpub+zip';
    case APPLICATION_PRS_IMPLIED_DOCUMENT_XML = 'application/prs.implied-document+xml';
    case APPLICATION_PRS_IMPLIED_EXECUTABLE = 'application/prs.implied-executable';
    case APPLICATION_PRS_IMPLIED_OBJECT_JSON = 'application/prs.implied-object+json';
    case APPLICATION_PRS_IMPLIED_OBJECT_JSON_SEQ = 'application/prs.implied-object+json-seq';
    case APPLICATION_PRS_IMPLIED_OBJECT_YAML = 'application/prs.implied-object+yaml';
    case APPLICATION_PRS_IMPLIED_STRUCTURE = 'application/prs.implied-structure';
    case APPLICATION_PRS_MAYFILE = 'application/prs.mayfile';
    case APPLICATION_PRS_NPREND = 'application/prs.nprend';
    case APPLICATION_PRS_PLUCKER = 'application/prs.plucker';
    case APPLICATION_PRS_RDF_XML_CRYPT = 'application/prs.rdf-xml-crypt';
    case APPLICATION_PRS_VCFBZIP2 = 'application/prs.vcfbzip2';
    case APPLICATION_PRS_XSF_XML = 'application/prs.xsf+xml';
    case APPLICATION_PSKC_XML = 'application/pskc+xml';
    case APPLICATION_PVD_JSON = 'application/pvd+json';
    case APPLICATION_RDF_XML = 'application/rdf+xml';
    case APPLICATION_ROUTE_APD_XML = 'application/route-apd+xml';
    case APPLICATION_ROUTE_S_TSID_XML = 'application/route-s-tsid+xml';
    case APPLICATION_ROUTE_USD_XML = 'application/route-usd+xml';
    case APPLICATION_QSIG = 'application/QSIG';
    case APPLICATION_RAPTORFEC = 'application/raptorfec';
    case APPLICATION_RDAP_JSON = 'application/rdap+json';
    case APPLICATION_REGINFO_XML = 'application/reginfo+xml';
    case APPLICATION_RELAX_NG_COMPACT_SYNTAX = 'application/relax-ng-compact-syntax';
    case APPLICATION_REMOTE_PRINTING = 'application/remote-printing';
    case APPLICATION_REPUTON_JSON = 'application/reputon+json';
    case APPLICATION_RESOLVE_RESPONSE_JWT = 'application/resolve-response+jwt';
    case APPLICATION_RESOURCE_LISTS_DIFF_XML = 'application/resource-lists-diff+xml';
    case APPLICATION_RESOURCE_LISTS_XML = 'application/resource-lists+xml';
    case APPLICATION_RFC_XML = 'application/rfc+xml';
    case APPLICATION_RISCOS = 'application/riscos';
    case APPLICATION_RLMI_XML = 'application/rlmi+xml';
    case APPLICATION_RLS_SERVICES_XML = 'application/rls-services+xml';
    case APPLICATION_RPKI_CHECKLIST = 'application/rpki-checklist';
    case APPLICATION_RPKI_GHOSTBUSTERS = 'application/rpki-ghostbusters';
    case APPLICATION_RPKI_MANIFEST = 'application/rpki-manifest';
    case APPLICATION_RPKI_PUBLICATION = 'application/rpki-publication';
    case APPLICATION_RPKI_ROA = 'application/rpki-roa';
    case APPLICATION_RPKI_SIGNED_TAL = 'application/rpki-signed-tal';
    case APPLICATION_RPKI_UPDOWN = 'application/rpki-updown';
    case APPLICATION_RTF = 'application/rtf';
    case APPLICATION_RTPLOOPBACK = 'application/rtploopback';
    case APPLICATION_RTX = 'application/rtx';
    case APPLICATION_SAMLASSERTION_XML = 'application/samlassertion+xml';
    case APPLICATION_SAMLMETADATA_XML = 'application/samlmetadata+xml';
    case APPLICATION_SARIF_EXTERNAL_PROPERTIES_JSON = 'application/sarif-external-properties+json';
    case APPLICATION_SARIF_JSON = 'application/sarif+json';
    case APPLICATION_SBE = 'application/sbe';
    case APPLICATION_SBML_XML = 'application/sbml+xml';
    case APPLICATION_SCAIP_XML = 'application/scaip+xml';
    case APPLICATION_SCIM_JSON = 'application/scim+json';
    case APPLICATION_SCVP_CV_REQUEST = 'application/scvp-cv-request';
    case APPLICATION_SCVP_CV_RESPONSE = 'application/scvp-cv-response';
    case APPLICATION_SCVP_VP_REQUEST = 'application/scvp-vp-request';
    case APPLICATION_SCVP_VP_RESPONSE = 'application/scvp-vp-response';
    case APPLICATION_SDP = 'application/sdp';
    case APPLICATION_SECEVENT_JWT = 'application/secevent+jwt';
    case APPLICATION_SENML_ETCH_CBOR = 'application/senml-etch+cbor';
    case APPLICATION_SENML_ETCH_JSON = 'application/senml-etch+json';
    case APPLICATION_SENML_EXI = 'application/senml-exi';
    case APPLICATION_SENML_CBOR = 'application/senml+cbor';
    case APPLICATION_SENML_JSON = 'application/senml+json';
    case APPLICATION_SENML_XML = 'application/senml+xml';
    case APPLICATION_SENSML_EXI = 'application/sensml-exi';
    case APPLICATION_SENSML_CBOR = 'application/sensml+cbor';
    case APPLICATION_SENSML_JSON = 'application/sensml+json';
    case APPLICATION_SENSML_XML = 'application/sensml+xml';
    case APPLICATION_SEP_EXI = 'application/sep-exi';
    case APPLICATION_SEP_XML = 'application/sep+xml';
    case APPLICATION_SESSION_INFO = 'application/session-info';
    case APPLICATION_SET_PAYMENT = 'application/set-payment';
    case APPLICATION_SET_PAYMENT_INITIATION = 'application/set-payment-initiation';
    case APPLICATION_SET_REGISTRATION = 'application/set-registration';
    case APPLICATION_SET_REGISTRATION_INITIATION = 'application/set-registration-initiation';
    case APPLICATION_SGML = 'application/SGML';
    case APPLICATION_SGML_OPEN_CATALOG = 'application/sgml-open-catalog';
    case APPLICATION_SHF_XML = 'application/shf+xml';
    case APPLICATION_SIEVE = 'application/sieve';
    case APPLICATION_SIMPLE_FILTER_XML = 'application/simple-filter+xml';
    case APPLICATION_SIMPLE_MESSAGE_SUMMARY = 'application/simple-message-summary';
    case APPLICATION_SIMPLESYMBOLCONTAINER = 'application/simpleSymbolContainer';
    case APPLICATION_SIPC = 'application/sipc';
    case APPLICATION_SLATE = 'application/slate';
    case APPLICATION_SMIL = 'application/smil';
    case APPLICATION_SMIL_XML = 'application/smil+xml';
    case APPLICATION_SMPTE336M = 'application/smpte336m';
    case APPLICATION_SOAP_FASTINFOSET = 'application/soap+fastinfoset';
    case APPLICATION_SOAP_XML = 'application/soap+xml';
    case APPLICATION_SPARQL_QUERY = 'application/sparql-query';
    case APPLICATION_SPDX_JSON = 'application/spdx+json';
    case APPLICATION_SPARQL_RESULTS_XML = 'application/sparql-results+xml';
    case APPLICATION_SPIRITS_EVENT_XML = 'application/spirits-event+xml';
    case APPLICATION_SQL = 'application/sql';
    case APPLICATION_SRGS = 'application/srgs';
    case APPLICATION_SRGS_XML = 'application/srgs+xml';
    case APPLICATION_SRU_XML = 'application/sru+xml';
    case APPLICATION_SSLKEYLOGFILE = 'application/sslkeylogfile';
    case APPLICATION_SSML_XML = 'application/ssml+xml';
    case APPLICATION_ST2110_41 = 'application/ST2110-41';
    case APPLICATION_STIX_JSON = 'application/stix+json';
    case APPLICATION_STRATUM = 'application/stratum';
    case APPLICATION_SWID_CBOR = 'application/swid+cbor';
    case APPLICATION_SWID_XML = 'application/swid+xml';
    case APPLICATION_TAMP_APEX_UPDATE = 'application/tamp-apex-update';
    case APPLICATION_TAMP_APEX_UPDATE_CONFIRM = 'application/tamp-apex-update-confirm';
    case APPLICATION_TAMP_COMMUNITY_UPDATE = 'application/tamp-community-update';
    case APPLICATION_TAMP_COMMUNITY_UPDATE_CONFIRM = 'application/tamp-community-update-confirm';
    case APPLICATION_TAMP_ERROR = 'application/tamp-error';
    case APPLICATION_TAMP_SEQUENCE_ADJUST = 'application/tamp-sequence-adjust';
    case APPLICATION_TAMP_SEQUENCE_ADJUST_CONFIRM = 'application/tamp-sequence-adjust-confirm';
    case APPLICATION_TAMP_STATUS_QUERY = 'application/tamp-status-query';
    case APPLICATION_TAMP_STATUS_RESPONSE = 'application/tamp-status-response';
    case APPLICATION_TAMP_UPDATE = 'application/tamp-update';
    case APPLICATION_TAMP_UPDATE_CONFIRM = 'application/tamp-update-confirm';
    case APPLICATION_TAXII_JSON = 'application/taxii+json';
    case APPLICATION_TD_JSON = 'application/td+json';
    case APPLICATION_TEI_XML = 'application/tei+xml';
    case APPLICATION_TETRA_ISI = 'application/TETRA_ISI';
    case APPLICATION_THRAUD_XML = 'application/thraud+xml';
    case APPLICATION_TIMESTAMP_QUERY = 'application/timestamp-query';
    case APPLICATION_TIMESTAMP_REPLY = 'application/timestamp-reply';
    case APPLICATION_TIMESTAMPED_DATA = 'application/timestamped-data';
    case APPLICATION_TLSRPT_GZIP = 'application/tlsrpt+gzip';
    case APPLICATION_TLSRPT_JSON = 'application/tlsrpt+json';
    case APPLICATION_TM_JSON = 'application/tm+json';
    case APPLICATION_TNAUTHLIST = 'application/tnauthlist';
    case APPLICATION_TOKEN_INTROSPECTION_JWT = 'application/token-introspection+jwt';
    case APPLICATION_TRICKLE_ICE_SDPFRAG = 'application/trickle-ice-sdpfrag';
    case APPLICATION_TRIG = 'application/trig';
    case APPLICATION_TRUST_CHAIN_JSON = 'application/trust-chain+json';
    case APPLICATION_TRUST_MARK_JWT = 'application/trust-mark+jwt';
    case APPLICATION_TRUST_MARK_DELEGATION_JWT = 'application/trust-mark-delegation+jwt';
    case APPLICATION_TTML_XML = 'application/ttml+xml';
    case APPLICATION_TVE_TRIGGER = 'application/tve-trigger';
    case APPLICATION_TZIF = 'application/tzif';
    case APPLICATION_TZIF_LEAP = 'application/tzif-leap';
    case APPLICATION_ULPFEC = 'application/ulpfec';
    case APPLICATION_URC_GRPSHEET_XML = 'application/urc-grpsheet+xml';
    case APPLICATION_URC_RESSHEET_XML = 'application/urc-ressheet+xml';
    case APPLICATION_URC_TARGETDESC_XML = 'application/urc-targetdesc+xml';
    case APPLICATION_URC_UISOCKETDESC_XML = 'application/urc-uisocketdesc+xml';
    case APPLICATION_VC = 'application/vc';
    case APPLICATION_VCARD_JSON = 'application/vcard+json';
    case APPLICATION_VCARD_XML = 'application/vcard+xml';
    case APPLICATION_VEMMI = 'application/vemmi';
    case APPLICATION_VND_1000MINDS_DECISION_MODEL_XML = 'application/vnd.1000minds.decision-model+xml';
    case APPLICATION_VND_1OB = 'application/vnd.1ob';
    case APPLICATION_VND_3GPP_5GNAS = 'application/vnd.3gpp.5gnas';
    case APPLICATION_VND_3GPP_5GSA2X = 'application/vnd.3gpp.5gsa2x';
    case APPLICATION_VND_3GPP_5GSA2X_LOCAL_SERVICE_INFORMATION = 'application/vnd.3gpp.5gsa2x-local-service-information';
    case APPLICATION_VND_3GPP_ACCESS_TRANSFER_EVENTS_XML = 'application/vnd.3gpp.access-transfer-events+xml';
    case APPLICATION_VND_3GPP_BSF_XML = 'application/vnd.3gpp.bsf+xml';
    case APPLICATION_VND_3GPP_CRS_XML = 'application/vnd.3gpp.crs+xml';
    case APPLICATION_VND_3GPP_CURRENT_LOCATION_DISCOVERY_XML = 'application/vnd.3gpp.current-location-discovery+xml';
    case APPLICATION_VND_3GPP_GMOP_XML = 'application/vnd.3gpp.GMOP+xml';
    case APPLICATION_VND_3GPP_GTPC = 'application/vnd.3gpp.gtpc';
    case APPLICATION_VND_3GPP_INTERWORKING_DATA = 'application/vnd.3gpp.interworking-data';
    case APPLICATION_VND_3GPP_LPP = 'application/vnd.3gpp.lpp';
    case APPLICATION_VND_3GPP_MC_SIGNALLING_EAR = 'application/vnd.3gpp.mc-signalling-ear';
    case APPLICATION_VND_3GPP_MCDATA_AFFILIATION_COMMAND_XML = 'application/vnd.3gpp.mcdata-affiliation-command+xml';
    case APPLICATION_VND_3GPP_MCDATA_INFO_XML = 'application/vnd.3gpp.mcdata-info+xml';
    case APPLICATION_VND_3GPP_MCDATA_MSGSTORE_CTRL_REQUEST_XML = 'application/vnd.3gpp.mcdata-msgstore-ctrl-request+xml';
    case APPLICATION_VND_3GPP_MCDATA_PAYLOAD = 'application/vnd.3gpp.mcdata-payload';
    case APPLICATION_VND_3GPP_MCDATA_REGROUP_XML = 'application/vnd.3gpp.mcdata-regroup+xml';
    case APPLICATION_VND_3GPP_MCDATA_SERVICE_CONFIG_XML = 'application/vnd.3gpp.mcdata-service-config+xml';
    case APPLICATION_VND_3GPP_MCDATA_SIGNALLING = 'application/vnd.3gpp.mcdata-signalling';
    case APPLICATION_VND_3GPP_MCDATA_UE_CONFIG_XML = 'application/vnd.3gpp.mcdata-ue-config+xml';
    case APPLICATION_VND_3GPP_MCDATA_USER_PROFILE_XML = 'application/vnd.3gpp.mcdata-user-profile+xml';
    case APPLICATION_VND_3GPP_MCPTT_AFFILIATION_COMMAND_XML = 'application/vnd.3gpp.mcptt-affiliation-command+xml';
    case APPLICATION_VND_3GPP_MCPTT_FLOOR_REQUEST_XML = 'application/vnd.3gpp.mcptt-floor-request+xml';
    case APPLICATION_VND_3GPP_MCPTT_INFO_XML = 'application/vnd.3gpp.mcptt-info+xml';
    case APPLICATION_VND_3GPP_MCPTT_LOCATION_INFO_XML = 'application/vnd.3gpp.mcptt-location-info+xml';
    case APPLICATION_VND_3GPP_MCPTT_MBMS_USAGE_INFO_XML = 'application/vnd.3gpp.mcptt-mbms-usage-info+xml';
    case APPLICATION_VND_3GPP_MCPTT_REGROUP_XML = 'application/vnd.3gpp.mcptt-regroup+xml';
    case APPLICATION_VND_3GPP_MCPTT_SERVICE_CONFIG_XML = 'application/vnd.3gpp.mcptt-service-config+xml';
    case APPLICATION_VND_3GPP_MCPTT_SIGNED_XML = 'application/vnd.3gpp.mcptt-signed+xml';
    case APPLICATION_VND_3GPP_MCPTT_UE_CONFIG_XML = 'application/vnd.3gpp.mcptt-ue-config+xml';
    case APPLICATION_VND_3GPP_MCPTT_UE_INIT_CONFIG_XML = 'application/vnd.3gpp.mcptt-ue-init-config+xml';
    case APPLICATION_VND_3GPP_MCPTT_USER_PROFILE_XML = 'application/vnd.3gpp.mcptt-user-profile+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_AFFILIATION_COMMAND_XML = 'application/vnd.3gpp.mcvideo-affiliation-command+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_AFFILIATION_INFO_XML = 'application/vnd.3gpp.mcvideo-affiliation-info+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_INFO_XML = 'application/vnd.3gpp.mcvideo-info+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_LOCATION_INFO_XML = 'application/vnd.3gpp.mcvideo-location-info+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_MBMS_USAGE_INFO_XML = 'application/vnd.3gpp.mcvideo-mbms-usage-info+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_REGROUP_XML = 'application/vnd.3gpp.mcvideo-regroup+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_SERVICE_CONFIG_XML = 'application/vnd.3gpp.mcvideo-service-config+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_TRANSMISSION_REQUEST_XML = 'application/vnd.3gpp.mcvideo-transmission-request+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_UE_CONFIG_XML = 'application/vnd.3gpp.mcvideo-ue-config+xml';
    case APPLICATION_VND_3GPP_MCVIDEO_USER_PROFILE_XML = 'application/vnd.3gpp.mcvideo-user-profile+xml';
    case APPLICATION_VND_3GPP_MID_CALL_XML = 'application/vnd.3gpp.mid-call+xml';
    case APPLICATION_VND_3GPP_NGAP = 'application/vnd.3gpp.ngap';
    case APPLICATION_VND_3GPP_PFCP = 'application/vnd.3gpp.pfcp';
    case APPLICATION_VND_3GPP_PIC_BW_LARGE = 'application/vnd.3gpp.pic-bw-large';
    case APPLICATION_VND_3GPP_PIC_BW_SMALL = 'application/vnd.3gpp.pic-bw-small';
    case APPLICATION_VND_3GPP_PIC_BW_VAR = 'application/vnd.3gpp.pic-bw-var';
    case APPLICATION_VND_3GPP_PINAPP_INFO_XML = 'application/vnd.3gpp.pinapp-info+xml';
    case APPLICATION_VND_3GPP_PROSE_PC3A_XML = 'application/vnd.3gpp-prose-pc3a+xml';
    case APPLICATION_VND_3GPP_PROSE_PC3ACH_XML = 'application/vnd.3gpp-prose-pc3ach+xml';
    case APPLICATION_VND_3GPP_PROSE_PC3CH_XML = 'application/vnd.3gpp-prose-pc3ch+xml';
    case APPLICATION_VND_3GPP_PROSE_PC8_XML = 'application/vnd.3gpp-prose-pc8+xml';
    case APPLICATION_VND_3GPP_PROSE_XML = 'application/vnd.3gpp-prose+xml';
    case APPLICATION_VND_3GPP_S1AP = 'application/vnd.3gpp.s1ap';
    case APPLICATION_VND_3GPP_SEAL_GROUP_DOC_XML = 'application/vnd.3gpp.seal-group-doc+xml';
    case APPLICATION_VND_3GPP_SEAL_INFO_XML = 'application/vnd.3gpp.seal-info+xml';
    case APPLICATION_VND_3GPP_SEAL_LOCATION_INFO_XML = 'application/vnd.3gpp.seal-location-info+xml';
    case APPLICATION_VND_3GPP_SEAL_MBMS_USAGE_INFO_XML = 'application/vnd.3gpp.seal-mbms-usage-info+xml';
    case APPLICATION_VND_3GPP_SEAL_NETWORK_QOS_MANAGEMENT_INFO_XML = 'application/vnd.3gpp.seal-network-QoS-management-info+xml';
    case APPLICATION_VND_3GPP_SEAL_UE_CONFIG_INFO_XML = 'application/vnd.3gpp.seal-ue-config-info+xml';
    case APPLICATION_VND_3GPP_SEAL_UNICAST_INFO_XML = 'application/vnd.3gpp.seal-unicast-info+xml';
    case APPLICATION_VND_3GPP_SEAL_USER_PROFILE_INFO_XML = 'application/vnd.3gpp.seal-user-profile-info+xml';
    case APPLICATION_VND_3GPP_SMS = 'application/vnd.3gpp.sms';
    case APPLICATION_VND_3GPP_SMS_XML = 'application/vnd.3gpp.sms+xml';
    case APPLICATION_VND_3GPP_SRVCC_EXT_XML = 'application/vnd.3gpp.srvcc-ext+xml';
    case APPLICATION_VND_3GPP_SRVCC_INFO_XML = 'application/vnd.3gpp.SRVCC-info+xml';
    case APPLICATION_VND_3GPP_STATE_AND_EVENT_INFO_XML = 'application/vnd.3gpp.state-and-event-info+xml';
    case APPLICATION_VND_3GPP_USSD_XML = 'application/vnd.3gpp.ussd+xml';
    case APPLICATION_VND_3GPP_VAE_INFO_XML = 'application/vnd.3gpp.vae-info+xml';
    case APPLICATION_VND_3GPP_V2X_LOCAL_SERVICE_INFORMATION = 'application/vnd.3gpp-v2x-local-service-information';
    case APPLICATION_VND_3GPP2_BCMCSINFO_XML = 'application/vnd.3gpp2.bcmcsinfo+xml';
    case APPLICATION_VND_3GPP2_SMS = 'application/vnd.3gpp2.sms';
    case APPLICATION_VND_3GPP2_TCAP = 'application/vnd.3gpp2.tcap';
    case APPLICATION_VND_3GPP_V2X = 'application/vnd.3gpp.v2x';
    case APPLICATION_VND_3LIGHTSSOFTWARE_IMAGESCAL = 'application/vnd.3lightssoftware.imagescal';
    case APPLICATION_VND_3M_POST_IT_NOTES = 'application/vnd.3M.Post-it-Notes';
    case APPLICATION_VND_ACCPAC_SIMPLY_ASO = 'application/vnd.accpac.simply.aso';
    case APPLICATION_VND_ACCPAC_SIMPLY_IMP = 'application/vnd.accpac.simply.imp';
    case APPLICATION_VND_ACM_ADDRESSXFER_JSON = 'application/vnd.acm.addressxfer+json';
    case APPLICATION_VND_ACM_CHATBOT_JSON = 'application/vnd.acm.chatbot+json';
    case APPLICATION_VND_ACUCOBOL = 'application/vnd.acucobol';
    case APPLICATION_VND_ACUCORP = 'application/vnd.acucorp';
    case APPLICATION_VND_ADOBE_FLASH_MOVIE = 'application/vnd.adobe.flash.movie';
    case APPLICATION_VND_ADOBE_FORMSCENTRAL_FCDT = 'application/vnd.adobe.formscentral.fcdt';
    case APPLICATION_VND_ADOBE_FXP = 'application/vnd.adobe.fxp';
    case APPLICATION_VND_ADOBE_PARTIAL_UPLOAD = 'application/vnd.adobe.partial-upload';
    case APPLICATION_VND_ADOBE_XDP_XML = 'application/vnd.adobe.xdp+xml';
    case APPLICATION_VND_AETHER_IMP = 'application/vnd.aether.imp';
    case APPLICATION_VND_AFPC_AFPLINEDATA = 'application/vnd.afpc.afplinedata';
    case APPLICATION_VND_AFPC_AFPLINEDATA_PAGEDEF = 'application/vnd.afpc.afplinedata-pagedef';
    case APPLICATION_VND_AFPC_CMOCA_CMRESOURCE = 'application/vnd.afpc.cmoca-cmresource';
    case APPLICATION_VND_AFPC_FOCA_CHARSET = 'application/vnd.afpc.foca-charset';
    case APPLICATION_VND_AFPC_FOCA_CODEDFONT = 'application/vnd.afpc.foca-codedfont';
    case APPLICATION_VND_AFPC_FOCA_CODEPAGE = 'application/vnd.afpc.foca-codepage';
    case APPLICATION_VND_AFPC_MODCA = 'application/vnd.afpc.modca';
    case APPLICATION_VND_AFPC_MODCA_CMTABLE = 'application/vnd.afpc.modca-cmtable';
    case APPLICATION_VND_AFPC_MODCA_FORMDEF = 'application/vnd.afpc.modca-formdef';
    case APPLICATION_VND_AFPC_MODCA_MEDIUMMAP = 'application/vnd.afpc.modca-mediummap';
    case APPLICATION_VND_AFPC_MODCA_OBJECTCONTAINER = 'application/vnd.afpc.modca-objectcontainer';
    case APPLICATION_VND_AFPC_MODCA_OVERLAY = 'application/vnd.afpc.modca-overlay';
    case APPLICATION_VND_AFPC_MODCA_PAGESEGMENT = 'application/vnd.afpc.modca-pagesegment';
    case APPLICATION_VND_AGE = 'application/vnd.age';
    case APPLICATION_VND_AH_BARCODE = 'application/vnd.ah-barcode';
    case APPLICATION_VND_AHEAD_SPACE = 'application/vnd.ahead.space';
    case APPLICATION_VND_AIRZIP_FILESECURE_AZF = 'application/vnd.airzip.filesecure.azf';
    case APPLICATION_VND_AIRZIP_FILESECURE_AZS = 'application/vnd.airzip.filesecure.azs';
    case APPLICATION_VND_AMADEUS_JSON = 'application/vnd.amadeus+json';
    case APPLICATION_VND_AMAZON_MOBI8_EBOOK = 'application/vnd.amazon.mobi8-ebook';
    case APPLICATION_VND_AMERICANDYNAMICS_ACC = 'application/vnd.americandynamics.acc';
    case APPLICATION_VND_AMIGA_AMI = 'application/vnd.amiga.ami';
    case APPLICATION_VND_AMUNDSEN_MAZE_XML = 'application/vnd.amundsen.maze+xml';
    case APPLICATION_VND_ANDROID_OTA = 'application/vnd.android.ota';
    case APPLICATION_VND_ANKI = 'application/vnd.anki';
    case APPLICATION_VND_ANSER_WEB_CERTIFICATE_ISSUE_INITIATION = 'application/vnd.anser-web-certificate-issue-initiation';
    case APPLICATION_VND_ANTIX_GAME_COMPONENT = 'application/vnd.antix.game-component';
    case APPLICATION_VND_APACHE_ARROW_FILE = 'application/vnd.apache.arrow.file';
    case APPLICATION_VND_APACHE_ARROW_STREAM = 'application/vnd.apache.arrow.stream';
    case APPLICATION_VND_APACHE_PARQUET = 'application/vnd.apache.parquet';
    case APPLICATION_VND_APACHE_THRIFT_BINARY = 'application/vnd.apache.thrift.binary';
    case APPLICATION_VND_APACHE_THRIFT_COMPACT = 'application/vnd.apache.thrift.compact';
    case APPLICATION_VND_APACHE_THRIFT_JSON = 'application/vnd.apache.thrift.json';
    case APPLICATION_VND_APEXLANG = 'application/vnd.apexlang';
    case APPLICATION_VND_API_JSON = 'application/vnd.api+json';
    case APPLICATION_VND_APLEXTOR_WARRP_JSON = 'application/vnd.aplextor.warrp+json';
    case APPLICATION_VND_APOTHEKENDE_RESERVATION_JSON = 'application/vnd.apothekende.reservation+json';
    case APPLICATION_VND_APPLE_INSTALLER_XML = 'application/vnd.apple.installer+xml';
    case APPLICATION_VND_APPLE_KEYNOTE = 'application/vnd.apple.keynote';
    case APPLICATION_VND_APPLE_MPEGURL = 'application/vnd.apple.mpegurl';
    case APPLICATION_VND_APPLE_NUMBERS = 'application/vnd.apple.numbers';
    case APPLICATION_VND_APPLE_PAGES = 'application/vnd.apple.pages';
    case APPLICATION_VND_ARASTRA_SWI = 'application/vnd.arastra.swi';
    case APPLICATION_VND_ARISTANETWORKS_SWI = 'application/vnd.aristanetworks.swi';
    case APPLICATION_VND_ARTISAN_JSON = 'application/vnd.artisan+json';
    case APPLICATION_VND_ARTSQUARE = 'application/vnd.artsquare';
    case APPLICATION_VND_ASTRAEA_SOFTWARE_IOTA = 'application/vnd.astraea-software.iota';
    case APPLICATION_VND_AUDIOGRAPH = 'application/vnd.audiograph';
    case APPLICATION_VND_AUTOPACKAGE = 'application/vnd.autopackage';
    case APPLICATION_VND_AVALON_JSON = 'application/vnd.avalon+json';
    case APPLICATION_VND_AVISTAR_XML = 'application/vnd.avistar+xml';
    case APPLICATION_VND_BALSAMIQ_BMML_XML = 'application/vnd.balsamiq.bmml+xml';
    case APPLICATION_VND_BANANA_ACCOUNTING = 'application/vnd.banana-accounting';
    case APPLICATION_VND_BBF_USP_ERROR = 'application/vnd.bbf.usp.error';
    case APPLICATION_VND_BBF_USP_MSG = 'application/vnd.bbf.usp.msg';
    case APPLICATION_VND_BBF_USP_MSG_JSON = 'application/vnd.bbf.usp.msg+json';
    case APPLICATION_VND_BALSAMIQ_BMPR = 'application/vnd.balsamiq.bmpr';
    case APPLICATION_VND_BEKITZUR_STECH_JSON = 'application/vnd.bekitzur-stech+json';
    case APPLICATION_VND_BELIGHTSOFT_LHZD_ZIP = 'application/vnd.belightsoft.lhzd+zip';
    case APPLICATION_VND_BELIGHTSOFT_LHZL_ZIP = 'application/vnd.belightsoft.lhzl+zip';
    case APPLICATION_VND_BINT_MED_CONTENT = 'application/vnd.bint.med-content';
    case APPLICATION_VND_BIOPAX_RDF_XML = 'application/vnd.biopax.rdf+xml';
    case APPLICATION_VND_BLINK_IDB_VALUE_WRAPPER = 'application/vnd.blink-idb-value-wrapper';
    case APPLICATION_VND_BLUEICE_MULTIPASS = 'application/vnd.blueice.multipass';
    case APPLICATION_VND_BLUETOOTH_EP_OOB = 'application/vnd.bluetooth.ep.oob';
    case APPLICATION_VND_BLUETOOTH_LE_OOB = 'application/vnd.bluetooth.le.oob';
    case APPLICATION_VND_BMI = 'application/vnd.bmi';
    case APPLICATION_VND_BPF = 'application/vnd.bpf';
    case APPLICATION_VND_BPF3 = 'application/vnd.bpf3';
    case APPLICATION_VND_BUSINESSOBJECTS = 'application/vnd.businessobjects';
    case APPLICATION_VND_BYU_UAPI_JSON = 'application/vnd.byu.uapi+json';
    case APPLICATION_VND_BZIP3 = 'application/vnd.bzip3';
    case APPLICATION_VND_C3VOC_SCHEDULE_XML = 'application/vnd.c3voc.schedule+xml';
    case APPLICATION_VND_CAB_JSCRIPT = 'application/vnd.cab-jscript';
    case APPLICATION_VND_CANON_CPDL = 'application/vnd.canon-cpdl';
    case APPLICATION_VND_CANON_LIPS = 'application/vnd.canon-lips';
    case APPLICATION_VND_CAPASYSTEMS_PG_JSON = 'application/vnd.capasystems-pg+json';
    case APPLICATION_VND_CENDIO_THINLINC_CLIENTCONF = 'application/vnd.cendio.thinlinc.clientconf';
    case APPLICATION_VND_CENTURY_SYSTEMS_TCP_STREAM = 'application/vnd.century-systems.tcp_stream';
    case APPLICATION_VND_CHEMDRAW_XML = 'application/vnd.chemdraw+xml';
    case APPLICATION_VND_CHESS_PGN = 'application/vnd.chess-pgn';
    case APPLICATION_VND_CHIPNUTS_KARAOKE_MMD = 'application/vnd.chipnuts.karaoke-mmd';
    case APPLICATION_VND_CIEDI = 'application/vnd.ciedi';
    case APPLICATION_VND_CINDERELLA = 'application/vnd.cinderella';
    case APPLICATION_VND_CIRPACK_ISDN_EXT = 'application/vnd.cirpack.isdn-ext';
    case APPLICATION_VND_CITATIONSTYLES_STYLE_XML = 'application/vnd.citationstyles.style+xml';
    case APPLICATION_VND_CLAYMORE = 'application/vnd.claymore';
    case APPLICATION_VND_CLOANTO_RP9 = 'application/vnd.cloanto.rp9';
    case APPLICATION_VND_CLONK_C4GROUP = 'application/vnd.clonk.c4group';
    case APPLICATION_VND_CLUETRUST_CARTOMOBILE_CONFIG = 'application/vnd.cluetrust.cartomobile-config';
    case APPLICATION_VND_CLUETRUST_CARTOMOBILE_CONFIG_PKG = 'application/vnd.cluetrust.cartomobile-config-pkg';
    case APPLICATION_VND_CNCF_HELM_CHART_CONTENT_V1_TAR_GZIP = 'application/vnd.cncf.helm.chart.content.v1.tar+gzip';
    case APPLICATION_VND_CNCF_HELM_CHART_PROVENANCE_V1_PROV = 'application/vnd.cncf.helm.chart.provenance.v1.prov';
    case APPLICATION_VND_CNCF_HELM_CONFIG_V1_JSON = 'application/vnd.cncf.helm.config.v1+json';
    case APPLICATION_VND_COFFEESCRIPT = 'application/vnd.coffeescript';
    case APPLICATION_VND_COLLABIO_XODOCUMENTS_DOCUMENT = 'application/vnd.collabio.xodocuments.document';
    case APPLICATION_VND_COLLABIO_XODOCUMENTS_DOCUMENT_TEMPLATE = 'application/vnd.collabio.xodocuments.document-template';
    case APPLICATION_VND_COLLABIO_XODOCUMENTS_PRESENTATION = 'application/vnd.collabio.xodocuments.presentation';
    case APPLICATION_VND_COLLABIO_XODOCUMENTS_PRESENTATION_TEMPLATE = 'application/vnd.collabio.xodocuments.presentation-template';
    case APPLICATION_VND_COLLABIO_XODOCUMENTS_SPREADSHEET = 'application/vnd.collabio.xodocuments.spreadsheet';
    case APPLICATION_VND_COLLABIO_XODOCUMENTS_SPREADSHEET_TEMPLATE = 'application/vnd.collabio.xodocuments.spreadsheet-template';
    case APPLICATION_VND_COLLECTION_DOC_JSON = 'application/vnd.collection.doc+json';
    case APPLICATION_VND_COLLECTION_JSON = 'application/vnd.collection+json';
    case APPLICATION_VND_COLLECTION_NEXT_JSON = 'application/vnd.collection.next+json';
    case APPLICATION_VND_COMICBOOK_RAR = 'application/vnd.comicbook-rar';
    case APPLICATION_VND_COMICBOOK_ZIP = 'application/vnd.comicbook+zip';
    case APPLICATION_VND_COMMERCE_BATTELLE = 'application/vnd.commerce-battelle';
    case APPLICATION_VND_COMMONSPACE = 'application/vnd.commonspace';
    case APPLICATION_VND_COREOS_IGNITION_JSON = 'application/vnd.coreos.ignition+json';
    case APPLICATION_VND_COSMOCALLER = 'application/vnd.cosmocaller';
    case APPLICATION_VND_CONTACT_CMSG = 'application/vnd.contact.cmsg';
    case APPLICATION_VND_CRICK_CLICKER = 'application/vnd.crick.clicker';
    case APPLICATION_VND_CRICK_CLICKER_KEYBOARD = 'application/vnd.crick.clicker.keyboard';
    case APPLICATION_VND_CRICK_CLICKER_PALETTE = 'application/vnd.crick.clicker.palette';
    case APPLICATION_VND_CRICK_CLICKER_TEMPLATE = 'application/vnd.crick.clicker.template';
    case APPLICATION_VND_CRICK_CLICKER_WORDBANK = 'application/vnd.crick.clicker.wordbank';
    case APPLICATION_VND_CRITICALTOOLS_WBS_XML = 'application/vnd.criticaltools.wbs+xml';
    case APPLICATION_VND_CRYPTII_PIPE_JSON = 'application/vnd.cryptii.pipe+json';
    case APPLICATION_VND_CRYPTO_SHADE_FILE = 'application/vnd.crypto-shade-file';
    case APPLICATION_VND_CRYPTOMATOR_ENCRYPTED = 'application/vnd.cryptomator.encrypted';
    case APPLICATION_VND_CRYPTOMATOR_VAULT = 'application/vnd.cryptomator.vault';
    case APPLICATION_VND_CTC_POSML = 'application/vnd.ctc-posml';
    case APPLICATION_VND_CTCT_WS_XML = 'application/vnd.ctct.ws+xml';
    case APPLICATION_VND_CUPS_PDF = 'application/vnd.cups-pdf';
    case APPLICATION_VND_CUPS_POSTSCRIPT = 'application/vnd.cups-postscript';
    case APPLICATION_VND_CUPS_PPD = 'application/vnd.cups-ppd';
    case APPLICATION_VND_CUPS_RASTER = 'application/vnd.cups-raster';
    case APPLICATION_VND_CUPS_RAW = 'application/vnd.cups-raw';
    case APPLICATION_VND_CURL = 'application/vnd.curl';
    case APPLICATION_VND_CYAN_DEAN_ROOT_XML = 'application/vnd.cyan.dean.root+xml';
    case APPLICATION_VND_CYBANK = 'application/vnd.cybank';
    case APPLICATION_VND_CYCLONEDX_JSON = 'application/vnd.cyclonedx+json';
    case APPLICATION_VND_CYCLONEDX_XML = 'application/vnd.cyclonedx+xml';
    case APPLICATION_VND_D2L_COURSEPACKAGE1P0_ZIP = 'application/vnd.d2l.coursepackage1p0+zip';
    case APPLICATION_VND_D3M_DATASET = 'application/vnd.d3m-dataset';
    case APPLICATION_VND_D3M_PROBLEM = 'application/vnd.d3m-problem';
    case APPLICATION_VND_DART = 'application/vnd.dart';
    case APPLICATION_VND_DATA_VISION_RDZ = 'application/vnd.data-vision.rdz';
    case APPLICATION_VND_DATALOG = 'application/vnd.datalog';
    case APPLICATION_VND_DATAPACKAGE_JSON = 'application/vnd.datapackage+json';
    case APPLICATION_VND_DATARESOURCE_JSON = 'application/vnd.dataresource+json';
    case APPLICATION_VND_DBF = 'application/vnd.dbf';
    case APPLICATION_VND_DEBIAN_BINARY_PACKAGE = 'application/vnd.debian.binary-package';
    case APPLICATION_VND_DECE_DATA = 'application/vnd.dece.data';
    case APPLICATION_VND_DECE_TTML_XML = 'application/vnd.dece.ttml+xml';
    case APPLICATION_VND_DECE_UNSPECIFIED = 'application/vnd.dece.unspecified';
    case APPLICATION_VND_DECE_ZIP = 'application/vnd.dece.zip';
    case APPLICATION_VND_DENOVO_FCSELAYOUT_LINK = 'application/vnd.denovo.fcselayout-link';
    case APPLICATION_VND_DESMUME_MOVIE = 'application/vnd.desmume.movie';
    case APPLICATION_VND_DIR_BI_PLATE_DL_NOSUFFIX = 'application/vnd.dir-bi.plate-dl-nosuffix';
    case APPLICATION_VND_DM_DELEGATION_XML = 'application/vnd.dm.delegation+xml';
    case APPLICATION_VND_DNA = 'application/vnd.dna';
    case APPLICATION_VND_DOCUMENT_JSON = 'application/vnd.document+json';
    case APPLICATION_VND_DOLBY_MOBILE_1 = 'application/vnd.dolby.mobile.1';
    case APPLICATION_VND_DOLBY_MOBILE_2 = 'application/vnd.dolby.mobile.2';
    case APPLICATION_VND_DOREMIR_SCORECLOUD_BINARY_DOCUMENT = 'application/vnd.doremir.scorecloud-binary-document';
    case APPLICATION_VND_DPGRAPH = 'application/vnd.dpgraph';
    case APPLICATION_VND_DREAMFACTORY = 'application/vnd.dreamfactory';
    case APPLICATION_VND_DRIVE_JSON = 'application/vnd.drive+json';
    case APPLICATION_VND_DTG_LOCAL = 'application/vnd.dtg.local';
    case APPLICATION_VND_DTG_LOCAL_FLASH = 'application/vnd.dtg.local.flash';
    case APPLICATION_VND_DTG_LOCAL_HTML = 'application/vnd.dtg.local.html';
    case APPLICATION_VND_DVB_AIT = 'application/vnd.dvb.ait';
    case APPLICATION_VND_DVB_DVBISL_XML = 'application/vnd.dvb.dvbisl+xml';
    case APPLICATION_VND_DVB_DVBJ = 'application/vnd.dvb.dvbj';
    case APPLICATION_VND_DVB_ESGCONTAINER = 'application/vnd.dvb.esgcontainer';
    case APPLICATION_VND_DVB_IPDCDFTNOTIFACCESS = 'application/vnd.dvb.ipdcdftnotifaccess';
    case APPLICATION_VND_DVB_IPDCESGACCESS = 'application/vnd.dvb.ipdcesgaccess';
    case APPLICATION_VND_DVB_IPDCESGACCESS2 = 'application/vnd.dvb.ipdcesgaccess2';
    case APPLICATION_VND_DVB_IPDCESGPDD = 'application/vnd.dvb.ipdcesgpdd';
    case APPLICATION_VND_DVB_IPDCROAMING = 'application/vnd.dvb.ipdcroaming';
    case APPLICATION_VND_DVB_IPTV_ALFEC_BASE = 'application/vnd.dvb.iptv.alfec-base';
    case APPLICATION_VND_DVB_IPTV_ALFEC_ENHANCEMENT = 'application/vnd.dvb.iptv.alfec-enhancement';
    case APPLICATION_VND_DVB_NOTIF_AGGREGATE_ROOT_XML = 'application/vnd.dvb.notif-aggregate-root+xml';
    case APPLICATION_VND_DVB_NOTIF_CONTAINER_XML = 'application/vnd.dvb.notif-container+xml';
    case APPLICATION_VND_DVB_NOTIF_GENERIC_XML = 'application/vnd.dvb.notif-generic+xml';
    case APPLICATION_VND_DVB_NOTIF_IA_MSGLIST_XML = 'application/vnd.dvb.notif-ia-msglist+xml';
    case APPLICATION_VND_DVB_NOTIF_IA_REGISTRATION_REQUEST_XML = 'application/vnd.dvb.notif-ia-registration-request+xml';
    case APPLICATION_VND_DVB_NOTIF_IA_REGISTRATION_RESPONSE_XML = 'application/vnd.dvb.notif-ia-registration-response+xml';
    case APPLICATION_VND_DVB_NOTIF_INIT_XML = 'application/vnd.dvb.notif-init+xml';
    case APPLICATION_VND_DVB_PFR = 'application/vnd.dvb.pfr';
    case APPLICATION_VND_DVB_SERVICE = 'application/vnd.dvb.service';
    case APPLICATION_VND_DXR = 'application/vnd.dxr';
    case APPLICATION_VND_DYNAGEO = 'application/vnd.dynageo';
    case APPLICATION_VND_DZR = 'application/vnd.dzr';
    case APPLICATION_VND_EASYKARAOKE_CDGDOWNLOAD = 'application/vnd.easykaraoke.cdgdownload';
    case APPLICATION_VND_ECIP_RLP = 'application/vnd.ecip.rlp';
    case APPLICATION_VND_ECDIS_UPDATE = 'application/vnd.ecdis-update';
    case APPLICATION_VND_ECLIPSE_DITTO_JSON = 'application/vnd.eclipse.ditto+json';
    case APPLICATION_VND_ECOWIN_CHART = 'application/vnd.ecowin.chart';
    case APPLICATION_VND_ECOWIN_FILEREQUEST = 'application/vnd.ecowin.filerequest';
    case APPLICATION_VND_ECOWIN_FILEUPDATE = 'application/vnd.ecowin.fileupdate';
    case APPLICATION_VND_ECOWIN_SERIES = 'application/vnd.ecowin.series';
    case APPLICATION_VND_ECOWIN_SERIESREQUEST = 'application/vnd.ecowin.seriesrequest';
    case APPLICATION_VND_ECOWIN_SERIESUPDATE = 'application/vnd.ecowin.seriesupdate';
    case APPLICATION_VND_EFI_IMG = 'application/vnd.efi.img';
    case APPLICATION_VND_EFI_ISO = 'application/vnd.efi.iso';
    case APPLICATION_VND_ELN_ZIP = 'application/vnd.eln+zip';
    case APPLICATION_VND_EMCLIENT_ACCESSREQUEST_XML = 'application/vnd.emclient.accessrequest+xml';
    case APPLICATION_VND_ENLIVEN = 'application/vnd.enliven';
    case APPLICATION_VND_ENPHASE_ENVOY = 'application/vnd.enphase.envoy';
    case APPLICATION_VND_EPRINTS_DATA_XML = 'application/vnd.eprints.data+xml';
    case APPLICATION_VND_EPSON_ESF = 'application/vnd.epson.esf';
    case APPLICATION_VND_EPSON_MSF = 'application/vnd.epson.msf';
    case APPLICATION_VND_EPSON_QUICKANIME = 'application/vnd.epson.quickanime';
    case APPLICATION_VND_EPSON_SALT = 'application/vnd.epson.salt';
    case APPLICATION_VND_EPSON_SSF = 'application/vnd.epson.ssf';
    case APPLICATION_VND_ERICSSON_QUICKCALL = 'application/vnd.ericsson.quickcall';
    case APPLICATION_VND_EROFS = 'application/vnd.erofs';
    case APPLICATION_VND_ESPASS_ESPASS_ZIP = 'application/vnd.espass-espass+zip';
    case APPLICATION_VND_ESZIGNO3_XML = 'application/vnd.eszigno3+xml';
    case APPLICATION_VND_ETSI_AOC_XML = 'application/vnd.etsi.aoc+xml';
    case APPLICATION_VND_ETSI_ASIC_S_ZIP = 'application/vnd.etsi.asic-s+zip';
    case APPLICATION_VND_ETSI_ASIC_E_ZIP = 'application/vnd.etsi.asic-e+zip';
    case APPLICATION_VND_ETSI_CUG_XML = 'application/vnd.etsi.cug+xml';
    case APPLICATION_VND_ETSI_IPTVCOMMAND_XML = 'application/vnd.etsi.iptvcommand+xml';
    case APPLICATION_VND_ETSI_IPTVDISCOVERY_XML = 'application/vnd.etsi.iptvdiscovery+xml';
    case APPLICATION_VND_ETSI_IPTVPROFILE_XML = 'application/vnd.etsi.iptvprofile+xml';
    case APPLICATION_VND_ETSI_IPTVSAD_BC_XML = 'application/vnd.etsi.iptvsad-bc+xml';
    case APPLICATION_VND_ETSI_IPTVSAD_COD_XML = 'application/vnd.etsi.iptvsad-cod+xml';
    case APPLICATION_VND_ETSI_IPTVSAD_NPVR_XML = 'application/vnd.etsi.iptvsad-npvr+xml';
    case APPLICATION_VND_ETSI_IPTVSERVICE_XML = 'application/vnd.etsi.iptvservice+xml';
    case APPLICATION_VND_ETSI_IPTVSYNC_XML = 'application/vnd.etsi.iptvsync+xml';
    case APPLICATION_VND_ETSI_IPTVUEPROFILE_XML = 'application/vnd.etsi.iptvueprofile+xml';
    case APPLICATION_VND_ETSI_MCID_XML = 'application/vnd.etsi.mcid+xml';
    case APPLICATION_VND_ETSI_MHEG5 = 'application/vnd.etsi.mheg5';
    case APPLICATION_VND_ETSI_OVERLOAD_CONTROL_POLICY_DATASET_XML = 'application/vnd.etsi.overload-control-policy-dataset+xml';
    case APPLICATION_VND_ETSI_PSTN_XML = 'application/vnd.etsi.pstn+xml';
    case APPLICATION_VND_ETSI_SCI_XML = 'application/vnd.etsi.sci+xml';
    case APPLICATION_VND_ETSI_SIMSERVS_XML = 'application/vnd.etsi.simservs+xml';
    case APPLICATION_VND_ETSI_TIMESTAMP_TOKEN = 'application/vnd.etsi.timestamp-token';
    case APPLICATION_VND_ETSI_TSL_XML = 'application/vnd.etsi.tsl+xml';
    case APPLICATION_VND_ETSI_TSL_DER = 'application/vnd.etsi.tsl.der';
    case APPLICATION_VND_EU_KASPARIAN_CAR_JSON = 'application/vnd.eu.kasparian.car+json';
    case APPLICATION_VND_EUDORA_DATA = 'application/vnd.eudora.data';
    case APPLICATION_VND_EVOLV_ECIG_PROFILE = 'application/vnd.evolv.ecig.profile';
    case APPLICATION_VND_EVOLV_ECIG_SETTINGS = 'application/vnd.evolv.ecig.settings';
    case APPLICATION_VND_EVOLV_ECIG_THEME = 'application/vnd.evolv.ecig.theme';
    case APPLICATION_VND_EXSTREAM_EMPOWER_ZIP = 'application/vnd.exstream-empower+zip';
    case APPLICATION_VND_EXSTREAM_PACKAGE = 'application/vnd.exstream-package';
    case APPLICATION_VND_EZPIX_ALBUM = 'application/vnd.ezpix-album';
    case APPLICATION_VND_EZPIX_PACKAGE = 'application/vnd.ezpix-package';
    case APPLICATION_VND_F_SECURE_MOBILE = 'application/vnd.f-secure.mobile';
    case APPLICATION_VND_FASTCOPY_DISK_IMAGE = 'application/vnd.fastcopy-disk-image';
    case APPLICATION_VND_FAMILYSEARCH_GEDCOM_ZIP = 'application/vnd.familysearch.gedcom+zip';
    case APPLICATION_VND_FDSN_MSEED = 'application/vnd.fdsn.mseed';
    case APPLICATION_VND_FDSN_SEED = 'application/vnd.fdsn.seed';
    case APPLICATION_VND_FFSNS = 'application/vnd.ffsns';
    case APPLICATION_VND_FICLAB_FLB_ZIP = 'application/vnd.ficlab.flb+zip';
    case APPLICATION_VND_FILMIT_ZFC = 'application/vnd.filmit.zfc';
    case APPLICATION_VND_FINTS = 'application/vnd.fints';
    case APPLICATION_VND_FIREMONKEYS_CLOUDCELL = 'application/vnd.firemonkeys.cloudcell';
    case APPLICATION_VND_FLOGRAPHIT = 'application/vnd.FloGraphIt';
    case APPLICATION_VND_FLUXTIME_CLIP = 'application/vnd.fluxtime.clip';
    case APPLICATION_VND_FONT_FONTFORGE_SFD = 'application/vnd.font-fontforge-sfd';
    case APPLICATION_VND_FRAMEMAKER = 'application/vnd.framemaker';
    case APPLICATION_VND_FREELOG_COMIC = 'application/vnd.freelog.comic';
    case APPLICATION_VND_FROGANS_FNC = 'application/vnd.frogans.fnc';
    case APPLICATION_VND_FROGANS_LTF = 'application/vnd.frogans.ltf';
    case APPLICATION_VND_FSC_WEBLAUNCH = 'application/vnd.fsc.weblaunch';
    case APPLICATION_VND_FUJIFILM_FB_DOCUWORKS = 'application/vnd.fujifilm.fb.docuworks';
    case APPLICATION_VND_FUJIFILM_FB_DOCUWORKS_BINDER = 'application/vnd.fujifilm.fb.docuworks.binder';
    case APPLICATION_VND_FUJIFILM_FB_DOCUWORKS_CONTAINER = 'application/vnd.fujifilm.fb.docuworks.container';
    case APPLICATION_VND_FUJIFILM_FB_JFI_XML = 'application/vnd.fujifilm.fb.jfi+xml';
    case APPLICATION_VND_FUJITSU_OASYS = 'application/vnd.fujitsu.oasys';
    case APPLICATION_VND_FUJITSU_OASYS2 = 'application/vnd.fujitsu.oasys2';
    case APPLICATION_VND_FUJITSU_OASYS3 = 'application/vnd.fujitsu.oasys3';
    case APPLICATION_VND_FUJITSU_OASYSGP = 'application/vnd.fujitsu.oasysgp';
    case APPLICATION_VND_FUJITSU_OASYSPRS = 'application/vnd.fujitsu.oasysprs';
    case APPLICATION_VND_FUJIXEROX_ART4 = 'application/vnd.fujixerox.ART4';
    case APPLICATION_VND_FUJIXEROX_ART_EX = 'application/vnd.fujixerox.ART-EX';
    case APPLICATION_VND_FUJIXEROX_DDD = 'application/vnd.fujixerox.ddd';
    case APPLICATION_VND_FUJIXEROX_DOCUWORKS = 'application/vnd.fujixerox.docuworks';
    case APPLICATION_VND_FUJIXEROX_DOCUWORKS_BINDER = 'application/vnd.fujixerox.docuworks.binder';
    case APPLICATION_VND_FUJIXEROX_DOCUWORKS_CONTAINER = 'application/vnd.fujixerox.docuworks.container';
    case APPLICATION_VND_FUJIXEROX_HBPL = 'application/vnd.fujixerox.HBPL';
    case APPLICATION_VND_FUT_MISNET = 'application/vnd.fut-misnet';
    case APPLICATION_VND_FUTOIN_CBOR = 'application/vnd.futoin+cbor';
    case APPLICATION_VND_FUTOIN_JSON = 'application/vnd.futoin+json';
    case APPLICATION_VND_FUZZYSHEET = 'application/vnd.fuzzysheet';
    case APPLICATION_VND_GA4GH_PASSPORT_JWT = 'application/vnd.ga4gh.passport+jwt';
    case APPLICATION_VND_GENOMATIX_TUXEDO = 'application/vnd.genomatix.tuxedo';
    case APPLICATION_VND_GENOZIP = 'application/vnd.genozip';
    case APPLICATION_VND_GENTICS_GRD_JSON = 'application/vnd.gentics.grd+json';
    case APPLICATION_VND_GENTOO_CATMETADATA_XML = 'application/vnd.gentoo.catmetadata+xml';
    case APPLICATION_VND_GENTOO_EBUILD = 'application/vnd.gentoo.ebuild';
    case APPLICATION_VND_GENTOO_ECLASS = 'application/vnd.gentoo.eclass';
    case APPLICATION_VND_GENTOO_GPKG = 'application/vnd.gentoo.gpkg';
    case APPLICATION_VND_GENTOO_MANIFEST = 'application/vnd.gentoo.manifest';
    case APPLICATION_VND_GENTOO_XPAK = 'application/vnd.gentoo.xpak';
    case APPLICATION_VND_GENTOO_PKGMETADATA_XML = 'application/vnd.gentoo.pkgmetadata+xml';
    case APPLICATION_VND_GEO_JSON = 'application/vnd.geo+json';
    case APPLICATION_VND_GEOCUBE_XML = 'application/vnd.geocube+xml';
    case APPLICATION_VND_GEOGEBRA_FILE = 'application/vnd.geogebra.file';
    case APPLICATION_VND_GEOGEBRA_SLIDES = 'application/vnd.geogebra.slides';
    case APPLICATION_VND_GEOGEBRA_TOOL = 'application/vnd.geogebra.tool';
    case APPLICATION_VND_GEOMETRY_EXPLORER = 'application/vnd.geometry-explorer';
    case APPLICATION_VND_GEONEXT = 'application/vnd.geonext';
    case APPLICATION_VND_GEOPLAN = 'application/vnd.geoplan';
    case APPLICATION_VND_GEOSPACE = 'application/vnd.geospace';
    case APPLICATION_VND_GERBER = 'application/vnd.gerber';
    case APPLICATION_VND_GLOBALPLATFORM_CARD_CONTENT_MGT = 'application/vnd.globalplatform.card-content-mgt';
    case APPLICATION_VND_GLOBALPLATFORM_CARD_CONTENT_MGT_RESPONSE = 'application/vnd.globalplatform.card-content-mgt-response';
    case APPLICATION_VND_GMX = 'application/vnd.gmx';
    case APPLICATION_VND_GNU_TALER_EXCHANGE_JSON = 'application/vnd.gnu.taler.exchange+json';
    case APPLICATION_VND_GNU_TALER_MERCHANT_JSON = 'application/vnd.gnu.taler.merchant+json';
    case APPLICATION_VND_GOOGLE_EARTH_KML_XML = 'application/vnd.google-earth.kml+xml';
    case APPLICATION_VND_GOOGLE_EARTH_KMZ = 'application/vnd.google-earth.kmz';
    case APPLICATION_VND_GOV_SK_E_FORM_XML = 'application/vnd.gov.sk.e-form+xml';
    case APPLICATION_VND_GOV_SK_E_FORM_ZIP = 'application/vnd.gov.sk.e-form+zip';
    case APPLICATION_VND_GOV_SK_XMLDATACONTAINER_XML = 'application/vnd.gov.sk.xmldatacontainer+xml';
    case APPLICATION_VND_GPXSEE_MAP_XML = 'application/vnd.gpxsee.map+xml';
    case APPLICATION_VND_GRAFEQ = 'application/vnd.grafeq';
    case APPLICATION_VND_GRIDMP = 'application/vnd.gridmp';
    case APPLICATION_VND_GROOVE_ACCOUNT = 'application/vnd.groove-account';
    case APPLICATION_VND_GROOVE_HELP = 'application/vnd.groove-help';
    case APPLICATION_VND_GROOVE_IDENTITY_MESSAGE = 'application/vnd.groove-identity-message';
    case APPLICATION_VND_GROOVE_INJECTOR = 'application/vnd.groove-injector';
    case APPLICATION_VND_GROOVE_TOOL_MESSAGE = 'application/vnd.groove-tool-message';
    case APPLICATION_VND_GROOVE_TOOL_TEMPLATE = 'application/vnd.groove-tool-template';
    case APPLICATION_VND_GROOVE_VCARD = 'application/vnd.groove-vcard';
    case APPLICATION_VND_HAL_JSON = 'application/vnd.hal+json';
    case APPLICATION_VND_HAL_XML = 'application/vnd.hal+xml';
    case APPLICATION_VND_HANDHELD_ENTERTAINMENT_XML = 'application/vnd.HandHeld-Entertainment+xml';
    case APPLICATION_VND_HBCI = 'application/vnd.hbci';
    case APPLICATION_VND_HC_JSON = 'application/vnd.hc+json';
    case APPLICATION_VND_HCL_BIREPORTS = 'application/vnd.hcl-bireports';
    case APPLICATION_VND_HDT = 'application/vnd.hdt';
    case APPLICATION_VND_HEROKU_JSON = 'application/vnd.heroku+json';
    case APPLICATION_VND_HHE_LESSON_PLAYER = 'application/vnd.hhe.lesson-player';
    case APPLICATION_VND_HP_HPGL = 'application/vnd.hp-HPGL';
    case APPLICATION_VND_HP_HPID = 'application/vnd.hp-hpid';
    case APPLICATION_VND_HP_HPS = 'application/vnd.hp-hps';
    case APPLICATION_VND_HP_JLYT = 'application/vnd.hp-jlyt';
    case APPLICATION_VND_HP_PCL = 'application/vnd.hp-PCL';
    case APPLICATION_VND_HP_PCLXL = 'application/vnd.hp-PCLXL';
    case APPLICATION_VND_HSL = 'application/vnd.hsl';
    case APPLICATION_VND_HTTPHONE = 'application/vnd.httphone';
    case APPLICATION_VND_HYDROSTATIX_SOF_DATA = 'application/vnd.hydrostatix.sof-data';
    case APPLICATION_VND_HYPER_ITEM_JSON = 'application/vnd.hyper-item+json';
    case APPLICATION_VND_HYPER_JSON = 'application/vnd.hyper+json';
    case APPLICATION_VND_HYPERDRIVE_JSON = 'application/vnd.hyperdrive+json';
    case APPLICATION_VND_HZN_3D_CROSSWORD = 'application/vnd.hzn-3d-crossword';
    case APPLICATION_VND_IBM_AFPLINEDATA = 'application/vnd.ibm.afplinedata';
    case APPLICATION_VND_IBM_ELECTRONIC_MEDIA = 'application/vnd.ibm.electronic-media';
    case APPLICATION_VND_IBM_MINIPAY = 'application/vnd.ibm.MiniPay';
    case APPLICATION_VND_IBM_MODCAP = 'application/vnd.ibm.modcap';
    case APPLICATION_VND_IBM_RIGHTS_MANAGEMENT = 'application/vnd.ibm.rights-management';
    case APPLICATION_VND_IBM_SECURE_CONTAINER = 'application/vnd.ibm.secure-container';
    case APPLICATION_VND_ICCPROFILE = 'application/vnd.iccprofile';
    case APPLICATION_VND_IEEE_1905 = 'application/vnd.ieee.1905';
    case APPLICATION_VND_IGLOADER = 'application/vnd.igloader';
    case APPLICATION_VND_IMAGEMETER_FOLDER_ZIP = 'application/vnd.imagemeter.folder+zip';
    case APPLICATION_VND_IMAGEMETER_IMAGE_ZIP = 'application/vnd.imagemeter.image+zip';
    case APPLICATION_VND_IMMERVISION_IVP = 'application/vnd.immervision-ivp';
    case APPLICATION_VND_IMMERVISION_IVU = 'application/vnd.immervision-ivu';
    case APPLICATION_VND_IMS_IMSCCV1P1 = 'application/vnd.ims.imsccv1p1';
    case APPLICATION_VND_IMS_IMSCCV1P2 = 'application/vnd.ims.imsccv1p2';
    case APPLICATION_VND_IMS_IMSCCV1P3 = 'application/vnd.ims.imsccv1p3';
    case APPLICATION_VND_IMS_LIS_V2_RESULT_JSON = 'application/vnd.ims.lis.v2.result+json';
    case APPLICATION_VND_IMS_LTI_V2_TOOLCONSUMERPROFILE_JSON = 'application/vnd.ims.lti.v2.toolconsumerprofile+json';
    case APPLICATION_VND_IMS_LTI_V2_TOOLPROXY_ID_JSON = 'application/vnd.ims.lti.v2.toolproxy.id+json';
    case APPLICATION_VND_IMS_LTI_V2_TOOLPROXY_JSON = 'application/vnd.ims.lti.v2.toolproxy+json';
    case APPLICATION_VND_IMS_LTI_V2_TOOLSETTINGS_JSON = 'application/vnd.ims.lti.v2.toolsettings+json';
    case APPLICATION_VND_IMS_LTI_V2_TOOLSETTINGS_SIMPLE_JSON = 'application/vnd.ims.lti.v2.toolsettings.simple+json';
    case APPLICATION_VND_INFORMEDCONTROL_RMS_XML = 'application/vnd.informedcontrol.rms+xml';
    case APPLICATION_VND_INFOTECH_PROJECT = 'application/vnd.infotech.project';
    case APPLICATION_VND_INFOTECH_PROJECT_XML = 'application/vnd.infotech.project+xml';
    case APPLICATION_VND_INFORMIX_VISIONARY = 'application/vnd.informix-visionary';
    case APPLICATION_VND_INNOPATH_WAMP_NOTIFICATION = 'application/vnd.innopath.wamp.notification';
    case APPLICATION_VND_INSORS_IGM = 'application/vnd.insors.igm';
    case APPLICATION_VND_INTERCON_FORMNET = 'application/vnd.intercon.formnet';
    case APPLICATION_VND_INTERGEO = 'application/vnd.intergeo';
    case APPLICATION_VND_INTERTRUST_DIGIBOX = 'application/vnd.intertrust.digibox';
    case APPLICATION_VND_INTERTRUST_NNCP = 'application/vnd.intertrust.nncp';
    case APPLICATION_VND_INTU_QBO = 'application/vnd.intu.qbo';
    case APPLICATION_VND_INTU_QFX = 'application/vnd.intu.qfx';
    case APPLICATION_VND_IPFS_IPNS_RECORD = 'application/vnd.ipfs.ipns-record';
    case APPLICATION_VND_IPLD_CAR = 'application/vnd.ipld.car';
    case APPLICATION_VND_IPLD_DAG_CBOR = 'application/vnd.ipld.dag-cbor';
    case APPLICATION_VND_IPLD_DAG_JSON = 'application/vnd.ipld.dag-json';
    case APPLICATION_VND_IPLD_RAW = 'application/vnd.ipld.raw';
    case APPLICATION_VND_IPTC_G2_CATALOGITEM_XML = 'application/vnd.iptc.g2.catalogitem+xml';
    case APPLICATION_VND_IPTC_G2_CONCEPTITEM_XML = 'application/vnd.iptc.g2.conceptitem+xml';
    case APPLICATION_VND_IPTC_G2_KNOWLEDGEITEM_XML = 'application/vnd.iptc.g2.knowledgeitem+xml';
    case APPLICATION_VND_IPTC_G2_NEWSITEM_XML = 'application/vnd.iptc.g2.newsitem+xml';
    case APPLICATION_VND_IPTC_G2_NEWSMESSAGE_XML = 'application/vnd.iptc.g2.newsmessage+xml';
    case APPLICATION_VND_IPTC_G2_PACKAGEITEM_XML = 'application/vnd.iptc.g2.packageitem+xml';
    case APPLICATION_VND_IPTC_G2_PLANNINGITEM_XML = 'application/vnd.iptc.g2.planningitem+xml';
    case APPLICATION_VND_IPUNPLUGGED_RCPROFILE = 'application/vnd.ipunplugged.rcprofile';
    case APPLICATION_VND_IREPOSITORY_PACKAGE_XML = 'application/vnd.irepository.package+xml';
    case APPLICATION_VND_IS_XPR = 'application/vnd.is-xpr';
    case APPLICATION_VND_ISAC_FCS = 'application/vnd.isac.fcs';
    case APPLICATION_VND_JAM = 'application/vnd.jam';
    case APPLICATION_VND_ISO11783_10_ZIP = 'application/vnd.iso11783-10+zip';
    case APPLICATION_VND_JAPANNET_DIRECTORY_SERVICE = 'application/vnd.japannet-directory-service';
    case APPLICATION_VND_JAPANNET_JPNSTORE_WAKEUP = 'application/vnd.japannet-jpnstore-wakeup';
    case APPLICATION_VND_JAPANNET_PAYMENT_WAKEUP = 'application/vnd.japannet-payment-wakeup';
    case APPLICATION_VND_JAPANNET_REGISTRATION = 'application/vnd.japannet-registration';
    case APPLICATION_VND_JAPANNET_REGISTRATION_WAKEUP = 'application/vnd.japannet-registration-wakeup';
    case APPLICATION_VND_JAPANNET_SETSTORE_WAKEUP = 'application/vnd.japannet-setstore-wakeup';
    case APPLICATION_VND_JAPANNET_VERIFICATION = 'application/vnd.japannet-verification';
    case APPLICATION_VND_JAPANNET_VERIFICATION_WAKEUP = 'application/vnd.japannet-verification-wakeup';
    case APPLICATION_VND_JCP_JAVAME_MIDLET_RMS = 'application/vnd.jcp.javame.midlet-rms';
    case APPLICATION_VND_JISP = 'application/vnd.jisp';
    case APPLICATION_VND_JOOST_JODA_ARCHIVE = 'application/vnd.joost.joda-archive';
    case APPLICATION_VND_JSK_ISDN_NGN = 'application/vnd.jsk.isdn-ngn';
    case APPLICATION_VND_KAHOOTZ = 'application/vnd.kahootz';
    case APPLICATION_VND_KDE_KARBON = 'application/vnd.kde.karbon';
    case APPLICATION_VND_KDE_KCHART = 'application/vnd.kde.kchart';
    case APPLICATION_VND_KDE_KFORMULA = 'application/vnd.kde.kformula';
    case APPLICATION_VND_KDE_KIVIO = 'application/vnd.kde.kivio';
    case APPLICATION_VND_KDE_KONTOUR = 'application/vnd.kde.kontour';
    case APPLICATION_VND_KDE_KPRESENTER = 'application/vnd.kde.kpresenter';
    case APPLICATION_VND_KDE_KSPREAD = 'application/vnd.kde.kspread';
    case APPLICATION_VND_KDE_KWORD = 'application/vnd.kde.kword';
    case APPLICATION_VND_KENAMEAAPP = 'application/vnd.kenameaapp';
    case APPLICATION_VND_KEYMAN_KMP_ZIP = 'application/vnd.keyman.kmp+zip';
    case APPLICATION_VND_KEYMAN_KMX = 'application/vnd.keyman.kmx';
    case APPLICATION_VND_KIDSPIRATION = 'application/vnd.kidspiration';
    case APPLICATION_VND_KINAR = 'application/vnd.Kinar';
    case APPLICATION_VND_KOAN = 'application/vnd.koan';
    case APPLICATION_VND_KODAK_DESCRIPTOR = 'application/vnd.kodak-descriptor';
    case APPLICATION_VND_LAS = 'application/vnd.las';
    case APPLICATION_VND_LAS_LAS_JSON = 'application/vnd.las.las+json';
    case APPLICATION_VND_LAS_LAS_XML = 'application/vnd.las.las+xml';
    case APPLICATION_VND_LASZIP = 'application/vnd.laszip';
    case APPLICATION_VND_LDEV_PRODUCTLICENSING = 'application/vnd.ldev.productlicensing';
    case APPLICATION_VND_LEAP_JSON = 'application/vnd.leap+json';
    case APPLICATION_VND_LIBERTY_REQUEST_XML = 'application/vnd.liberty-request+xml';
    case APPLICATION_VND_LLAMAGRAPHICS_LIFE_BALANCE_DESKTOP = 'application/vnd.llamagraphics.life-balance.desktop';
    case APPLICATION_VND_LLAMAGRAPHICS_LIFE_BALANCE_EXCHANGE_XML = 'application/vnd.llamagraphics.life-balance.exchange+xml';
    case APPLICATION_VND_LOGIPIPE_CIRCUIT_ZIP = 'application/vnd.logipipe.circuit+zip';
    case APPLICATION_VND_LOOM = 'application/vnd.loom';
    case APPLICATION_VND_LOTUS_1_2_3 = 'application/vnd.lotus-1-2-3';
    case APPLICATION_VND_LOTUS_APPROACH = 'application/vnd.lotus-approach';
    case APPLICATION_VND_LOTUS_FREELANCE = 'application/vnd.lotus-freelance';
    case APPLICATION_VND_LOTUS_NOTES = 'application/vnd.lotus-notes';
    case APPLICATION_VND_LOTUS_ORGANIZER = 'application/vnd.lotus-organizer';
    case APPLICATION_VND_LOTUS_SCREENCAM = 'application/vnd.lotus-screencam';
    case APPLICATION_VND_LOTUS_WORDPRO = 'application/vnd.lotus-wordpro';
    case APPLICATION_VND_MACPORTS_PORTPKG = 'application/vnd.macports.portpkg';
    case APPLICATION_VND_MAPBOX_VECTOR_TILE = 'application/vnd.mapbox-vector-tile';
    case APPLICATION_VND_MARLIN_DRM_ACTIONTOKEN_XML = 'application/vnd.marlin.drm.actiontoken+xml';
    case APPLICATION_VND_MARLIN_DRM_CONFTOKEN_XML = 'application/vnd.marlin.drm.conftoken+xml';
    case APPLICATION_VND_MARLIN_DRM_LICENSE_XML = 'application/vnd.marlin.drm.license+xml';
    case APPLICATION_VND_MARLIN_DRM_MDCF = 'application/vnd.marlin.drm.mdcf';
    case APPLICATION_VND_MASON_JSON = 'application/vnd.mason+json';
    case APPLICATION_VND_MAXAR_ARCHIVE_3TZ_ZIP = 'application/vnd.maxar.archive.3tz+zip';
    case APPLICATION_VND_MAXMIND_MAXMIND_DB = 'application/vnd.maxmind.maxmind-db';
    case APPLICATION_VND_MCD = 'application/vnd.mcd';
    case APPLICATION_VND_MDL = 'application/vnd.mdl';
    case APPLICATION_VND_MDL_MBSDF = 'application/vnd.mdl-mbsdf';
    case APPLICATION_VND_MEDCALCDATA = 'application/vnd.medcalcdata';
    case APPLICATION_VND_MEDIASTATION_CDKEY = 'application/vnd.mediastation.cdkey';
    case APPLICATION_VND_MEDICALHOLODECK_RECORDXR = 'application/vnd.medicalholodeck.recordxr';
    case APPLICATION_VND_MERIDIAN_SLINGSHOT = 'application/vnd.meridian-slingshot';
    case APPLICATION_VND_MERMAID = 'application/vnd.mermaid';
    case APPLICATION_VND_MFER = 'application/vnd.MFER';
    case APPLICATION_VND_MFMP = 'application/vnd.mfmp';
    case APPLICATION_VND_MICRO_JSON = 'application/vnd.micro+json';
    case APPLICATION_VND_MICROGRAFX_FLO = 'application/vnd.micrografx.flo';
    case APPLICATION_VND_MICROGRAFX_IGX = 'application/vnd.micrografx.igx';
    case APPLICATION_VND_MICROSOFT_PORTABLE_EXECUTABLE = 'application/vnd.microsoft.portable-executable';
    case APPLICATION_VND_MICROSOFT_WINDOWS_THUMBNAIL_CACHE = 'application/vnd.microsoft.windows.thumbnail-cache';
    case APPLICATION_VND_MIELE_JSON = 'application/vnd.miele+json';
    case APPLICATION_VND_MIF = 'application/vnd.mif';
    case APPLICATION_VND_MINISOFT_HP3000_SAVE = 'application/vnd.minisoft-hp3000-save';
    case APPLICATION_VND_MITSUBISHI_MISTY_GUARD_TRUSTWEB = 'application/vnd.mitsubishi.misty-guard.trustweb';
    case APPLICATION_VND_MOBIUS_DAF = 'application/vnd.Mobius.DAF';
    case APPLICATION_VND_MOBIUS_DIS = 'application/vnd.Mobius.DIS';
    case APPLICATION_VND_MOBIUS_MBK = 'application/vnd.Mobius.MBK';
    case APPLICATION_VND_MOBIUS_MQY = 'application/vnd.Mobius.MQY';
    case APPLICATION_VND_MOBIUS_MSL = 'application/vnd.Mobius.MSL';
    case APPLICATION_VND_MOBIUS_PLC = 'application/vnd.Mobius.PLC';
    case APPLICATION_VND_MOBIUS_TXF = 'application/vnd.Mobius.TXF';
    case APPLICATION_VND_MODL = 'application/vnd.modl';
    case APPLICATION_VND_MOPHUN_APPLICATION = 'application/vnd.mophun.application';
    case APPLICATION_VND_MOPHUN_CERTIFICATE = 'application/vnd.mophun.certificate';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE = 'application/vnd.motorola.flexsuite';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE_ADSI = 'application/vnd.motorola.flexsuite.adsi';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE_FIS = 'application/vnd.motorola.flexsuite.fis';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE_GOTAP = 'application/vnd.motorola.flexsuite.gotap';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE_KMR = 'application/vnd.motorola.flexsuite.kmr';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE_TTC = 'application/vnd.motorola.flexsuite.ttc';
    case APPLICATION_VND_MOTOROLA_FLEXSUITE_WEM = 'application/vnd.motorola.flexsuite.wem';
    case APPLICATION_VND_MOTOROLA_IPRM = 'application/vnd.motorola.iprm';
    case APPLICATION_VND_MOZILLA_XUL_XML = 'application/vnd.mozilla.xul+xml';
    case APPLICATION_VND_MS_ARTGALRY = 'application/vnd.ms-artgalry';
    case APPLICATION_VND_MS_ASF = 'application/vnd.ms-asf';
    case APPLICATION_VND_MS_CAB_COMPRESSED = 'application/vnd.ms-cab-compressed';
    case APPLICATION_VND_MS_3MFDOCUMENT = 'application/vnd.ms-3mfdocument';
    case APPLICATION_VND_MS_EXCEL = 'application/vnd.ms-excel';
    case APPLICATION_VND_MS_EXCEL_ADDIN_MACROENABLED_12 = 'application/vnd.ms-excel.addin.macroEnabled.12';
    case APPLICATION_VND_MS_EXCEL_SHEET_BINARY_MACROENABLED_12 = 'application/vnd.ms-excel.sheet.binary.macroEnabled.12';
    case APPLICATION_VND_MS_EXCEL_SHEET_MACROENABLED_12 = 'application/vnd.ms-excel.sheet.macroEnabled.12';
    case APPLICATION_VND_MS_EXCEL_TEMPLATE_MACROENABLED_12 = 'application/vnd.ms-excel.template.macroEnabled.12';
    case APPLICATION_VND_MS_FONTOBJECT = 'application/vnd.ms-fontobject';
    case APPLICATION_VND_MS_HTMLHELP = 'application/vnd.ms-htmlhelp';
    case APPLICATION_VND_MS_IMS = 'application/vnd.ms-ims';
    case APPLICATION_VND_MS_LRM = 'application/vnd.ms-lrm';
    case APPLICATION_VND_MS_OFFICE_ACTIVEX_XML = 'application/vnd.ms-office.activeX+xml';
    case APPLICATION_VND_MS_OFFICETHEME = 'application/vnd.ms-officetheme';
    case APPLICATION_VND_MS_PLAYREADY_INITIATOR_XML = 'application/vnd.ms-playready.initiator+xml';
    case APPLICATION_VND_MS_POWERPOINT = 'application/vnd.ms-powerpoint';
    case APPLICATION_VND_MS_POWERPOINT_ADDIN_MACROENABLED_12 = 'application/vnd.ms-powerpoint.addin.macroEnabled.12';
    case APPLICATION_VND_MS_POWERPOINT_PRESENTATION_MACROENABLED_12 = 'application/vnd.ms-powerpoint.presentation.macroEnabled.12';
    case APPLICATION_VND_MS_POWERPOINT_SLIDE_MACROENABLED_12 = 'application/vnd.ms-powerpoint.slide.macroEnabled.12';
    case APPLICATION_VND_MS_POWERPOINT_SLIDESHOW_MACROENABLED_12 = 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12';
    case APPLICATION_VND_MS_POWERPOINT_TEMPLATE_MACROENABLED_12 = 'application/vnd.ms-powerpoint.template.macroEnabled.12';
    case APPLICATION_VND_MS_PRINTDEVICECAPABILITIES_XML = 'application/vnd.ms-PrintDeviceCapabilities+xml';
    case APPLICATION_VND_MS_PRINTSCHEMATICKET_XML = 'application/vnd.ms-PrintSchemaTicket+xml';
    case APPLICATION_VND_MS_PROJECT = 'application/vnd.ms-project';
    case APPLICATION_VND_MS_TNEF = 'application/vnd.ms-tnef';
    case APPLICATION_VND_MS_WINDOWS_DEVICEPAIRING = 'application/vnd.ms-windows.devicepairing';
    case APPLICATION_VND_MS_WINDOWS_NWPRINTING_OOB = 'application/vnd.ms-windows.nwprinting.oob';
    case APPLICATION_VND_MS_WINDOWS_PRINTERPAIRING = 'application/vnd.ms-windows.printerpairing';
    case APPLICATION_VND_MS_WINDOWS_WSD_OOB = 'application/vnd.ms-windows.wsd.oob';
    case APPLICATION_VND_MS_WMDRM_LIC_CHLG_REQ = 'application/vnd.ms-wmdrm.lic-chlg-req';
    case APPLICATION_VND_MS_WMDRM_LIC_RESP = 'application/vnd.ms-wmdrm.lic-resp';
    case APPLICATION_VND_MS_WMDRM_METER_CHLG_REQ = 'application/vnd.ms-wmdrm.meter-chlg-req';
    case APPLICATION_VND_MS_WMDRM_METER_RESP = 'application/vnd.ms-wmdrm.meter-resp';
    case APPLICATION_VND_MS_WORD_DOCUMENT_MACROENABLED_12 = 'application/vnd.ms-word.document.macroEnabled.12';
    case APPLICATION_VND_MS_WORD_TEMPLATE_MACROENABLED_12 = 'application/vnd.ms-word.template.macroEnabled.12';
    case APPLICATION_VND_MS_WORKS = 'application/vnd.ms-works';
    case APPLICATION_VND_MS_WPL = 'application/vnd.ms-wpl';
    case APPLICATION_VND_MS_XPSDOCUMENT = 'application/vnd.ms-xpsdocument';
    case APPLICATION_VND_MSA_DISK_IMAGE = 'application/vnd.msa-disk-image';
    case APPLICATION_VND_MSEQ = 'application/vnd.mseq';
    case APPLICATION_VND_MSGPACK = 'application/vnd.msgpack';
    case APPLICATION_VND_MSIGN = 'application/vnd.msign';
    case APPLICATION_VND_MULTIAD_CREATOR = 'application/vnd.multiad.creator';
    case APPLICATION_VND_MULTIAD_CREATOR_CIF = 'application/vnd.multiad.creator.cif';
    case APPLICATION_VND_MUSICIAN = 'application/vnd.musician';
    case APPLICATION_VND_MUSIC_NIFF = 'application/vnd.music-niff';
    case APPLICATION_VND_MUVEE_STYLE = 'application/vnd.muvee.style';
    case APPLICATION_VND_MYNFC = 'application/vnd.mynfc';
    case APPLICATION_VND_NACAMAR_YBRID_JSON = 'application/vnd.nacamar.ybrid+json';
    case APPLICATION_VND_NATO_BINDINGDATAOBJECT_CBOR = 'application/vnd.nato.bindingdataobject+cbor';
    case APPLICATION_VND_NATO_BINDINGDATAOBJECT_JSON = 'application/vnd.nato.bindingdataobject+json';
    case APPLICATION_VND_NATO_BINDINGDATAOBJECT_XML = 'application/vnd.nato.bindingdataobject+xml';
    case APPLICATION_VND_NATO_OPENXMLFORMATS_PACKAGE_IEPD_ZIP = 'application/vnd.nato.openxmlformats-package.iepd+zip';
    case APPLICATION_VND_NCD_CONTROL = 'application/vnd.ncd.control';
    case APPLICATION_VND_NCD_REFERENCE = 'application/vnd.ncd.reference';
    case APPLICATION_VND_NEARST_INV_JSON = 'application/vnd.nearst.inv+json';
    case APPLICATION_VND_NEBUMIND_LINE = 'application/vnd.nebumind.line';
    case APPLICATION_VND_NERVANA = 'application/vnd.nervana';
    case APPLICATION_VND_NETFPX = 'application/vnd.netfpx';
    case APPLICATION_VND_NEUROLANGUAGE_NLU = 'application/vnd.neurolanguage.nlu';
    case APPLICATION_VND_NIMN = 'application/vnd.nimn';
    case APPLICATION_VND_NINTENDO_SNES_ROM = 'application/vnd.nintendo.snes.rom';
    case APPLICATION_VND_NINTENDO_NITRO_ROM = 'application/vnd.nintendo.nitro.rom';
    case APPLICATION_VND_NITF = 'application/vnd.nitf';
    case APPLICATION_VND_NOBLENET_DIRECTORY = 'application/vnd.noblenet-directory';
    case APPLICATION_VND_NOBLENET_SEALER = 'application/vnd.noblenet-sealer';
    case APPLICATION_VND_NOBLENET_WEB = 'application/vnd.noblenet-web';
    case APPLICATION_VND_NOKIA_CATALOGS = 'application/vnd.nokia.catalogs';
    case APPLICATION_VND_NOKIA_CONML_WBXML = 'application/vnd.nokia.conml+wbxml';
    case APPLICATION_VND_NOKIA_CONML_XML = 'application/vnd.nokia.conml+xml';
    case APPLICATION_VND_NOKIA_IPTV_CONFIG_XML = 'application/vnd.nokia.iptv.config+xml';
    case APPLICATION_VND_NOKIA_ISDS_RADIO_PRESETS = 'application/vnd.nokia.iSDS-radio-presets';
    case APPLICATION_VND_NOKIA_LANDMARK_WBXML = 'application/vnd.nokia.landmark+wbxml';
    case APPLICATION_VND_NOKIA_LANDMARK_XML = 'application/vnd.nokia.landmark+xml';
    case APPLICATION_VND_NOKIA_LANDMARKCOLLECTION_XML = 'application/vnd.nokia.landmarkcollection+xml';
    case APPLICATION_VND_NOKIA_NCD = 'application/vnd.nokia.ncd';
    case APPLICATION_VND_NOKIA_N_GAGE_AC_XML = 'application/vnd.nokia.n-gage.ac+xml';
    case APPLICATION_VND_NOKIA_N_GAGE_DATA = 'application/vnd.nokia.n-gage.data';
    case APPLICATION_VND_NOKIA_N_GAGE_SYMBIAN_INSTALL = 'application/vnd.nokia.n-gage.symbian.install';
    case APPLICATION_VND_NOKIA_PCD_WBXML = 'application/vnd.nokia.pcd+wbxml';
    case APPLICATION_VND_NOKIA_PCD_XML = 'application/vnd.nokia.pcd+xml';
    case APPLICATION_VND_NOKIA_RADIO_PRESET = 'application/vnd.nokia.radio-preset';
    case APPLICATION_VND_NOKIA_RADIO_PRESETS = 'application/vnd.nokia.radio-presets';
    case APPLICATION_VND_NOVADIGM_EDM = 'application/vnd.novadigm.EDM';
    case APPLICATION_VND_NOVADIGM_EDX = 'application/vnd.novadigm.EDX';
    case APPLICATION_VND_NOVADIGM_EXT = 'application/vnd.novadigm.EXT';
    case APPLICATION_VND_NTT_LOCAL_CONTENT_SHARE = 'application/vnd.ntt-local.content-share';
    case APPLICATION_VND_NTT_LOCAL_FILE_TRANSFER = 'application/vnd.ntt-local.file-transfer';
    case APPLICATION_VND_NTT_LOCAL_OGW_REMOTE_ACCESS = 'application/vnd.ntt-local.ogw_remote-access';
    case APPLICATION_VND_NTT_LOCAL_SIP_TA_REMOTE = 'application/vnd.ntt-local.sip-ta_remote';
    case APPLICATION_VND_NTT_LOCAL_SIP_TA_TCP_STREAM = 'application/vnd.ntt-local.sip-ta_tcp_stream';
    case APPLICATION_VND_OAI_WORKFLOWS = 'application/vnd.oai.workflows';
    case APPLICATION_VND_OAI_WORKFLOWS_JSON = 'application/vnd.oai.workflows+json';
    case APPLICATION_VND_OAI_WORKFLOWS_YAML = 'application/vnd.oai.workflows+yaml';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_BASE = 'application/vnd.oasis.opendocument.base';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_CHART = 'application/vnd.oasis.opendocument.chart';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_CHART_TEMPLATE = 'application/vnd.oasis.opendocument.chart-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_DATABASE = 'application/vnd.oasis.opendocument.database';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_FORMULA = 'application/vnd.oasis.opendocument.formula';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_FORMULA_TEMPLATE = 'application/vnd.oasis.opendocument.formula-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_GRAPHICS = 'application/vnd.oasis.opendocument.graphics';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_GRAPHICS_TEMPLATE = 'application/vnd.oasis.opendocument.graphics-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_IMAGE = 'application/vnd.oasis.opendocument.image';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_IMAGE_TEMPLATE = 'application/vnd.oasis.opendocument.image-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_PRESENTATION = 'application/vnd.oasis.opendocument.presentation';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_PRESENTATION_TEMPLATE = 'application/vnd.oasis.opendocument.presentation-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_SPREADSHEET = 'application/vnd.oasis.opendocument.spreadsheet';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_SPREADSHEET_TEMPLATE = 'application/vnd.oasis.opendocument.spreadsheet-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_TEXT = 'application/vnd.oasis.opendocument.text';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_TEXT_MASTER = 'application/vnd.oasis.opendocument.text-master';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_TEXT_MASTER_TEMPLATE = 'application/vnd.oasis.opendocument.text-master-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_TEXT_TEMPLATE = 'application/vnd.oasis.opendocument.text-template';
    case APPLICATION_VND_OASIS_OPENDOCUMENT_TEXT_WEB = 'application/vnd.oasis.opendocument.text-web';
    case APPLICATION_VND_OBN = 'application/vnd.obn';
    case APPLICATION_VND_OCF_CBOR = 'application/vnd.ocf+cbor';
    case APPLICATION_VND_OCI_IMAGE_MANIFEST_V1_JSON = 'application/vnd.oci.image.manifest.v1+json';
    case APPLICATION_VND_OFTN_L10N_JSON = 'application/vnd.oftn.l10n+json';
    case APPLICATION_VND_OIPF_CONTENTACCESSDOWNLOAD_XML = 'application/vnd.oipf.contentaccessdownload+xml';
    case APPLICATION_VND_OIPF_CONTENTACCESSSTREAMING_XML = 'application/vnd.oipf.contentaccessstreaming+xml';
    case APPLICATION_VND_OIPF_CSPG_HEXBINARY = 'application/vnd.oipf.cspg-hexbinary';
    case APPLICATION_VND_OIPF_DAE_SVG_XML = 'application/vnd.oipf.dae.svg+xml';
    case APPLICATION_VND_OIPF_DAE_XHTML_XML = 'application/vnd.oipf.dae.xhtml+xml';
    case APPLICATION_VND_OIPF_MIPPVCONTROLMESSAGE_XML = 'application/vnd.oipf.mippvcontrolmessage+xml';
    case APPLICATION_VND_OIPF_PAE_GEM = 'application/vnd.oipf.pae.gem';
    case APPLICATION_VND_OIPF_SPDISCOVERY_XML = 'application/vnd.oipf.spdiscovery+xml';
    case APPLICATION_VND_OIPF_SPDLIST_XML = 'application/vnd.oipf.spdlist+xml';
    case APPLICATION_VND_OIPF_UEPROFILE_XML = 'application/vnd.oipf.ueprofile+xml';
    case APPLICATION_VND_OIPF_USERPROFILE_XML = 'application/vnd.oipf.userprofile+xml';
    case APPLICATION_VND_OLPC_SUGAR = 'application/vnd.olpc-sugar';
    case APPLICATION_VND_OMA_BCAST_ASSOCIATED_PROCEDURE_PARAMETER_XML = 'application/vnd.oma.bcast.associated-procedure-parameter+xml';
    case APPLICATION_VND_OMA_BCAST_DRM_TRIGGER_XML = 'application/vnd.oma.bcast.drm-trigger+xml';
    case APPLICATION_VND_OMA_BCAST_IMD_XML = 'application/vnd.oma.bcast.imd+xml';
    case APPLICATION_VND_OMA_BCAST_LTKM = 'application/vnd.oma.bcast.ltkm';
    case APPLICATION_VND_OMA_BCAST_NOTIFICATION_XML = 'application/vnd.oma.bcast.notification+xml';
    case APPLICATION_VND_OMA_BCAST_PROVISIONINGTRIGGER = 'application/vnd.oma.bcast.provisioningtrigger';
    case APPLICATION_VND_OMA_BCAST_SGBOOT = 'application/vnd.oma.bcast.sgboot';
    case APPLICATION_VND_OMA_BCAST_SGDD_XML = 'application/vnd.oma.bcast.sgdd+xml';
    case APPLICATION_VND_OMA_BCAST_SGDU = 'application/vnd.oma.bcast.sgdu';
    case APPLICATION_VND_OMA_BCAST_SIMPLE_SYMBOL_CONTAINER = 'application/vnd.oma.bcast.simple-symbol-container';
    case APPLICATION_VND_OMA_BCAST_SMARTCARD_TRIGGER_XML = 'application/vnd.oma.bcast.smartcard-trigger+xml';
    case APPLICATION_VND_OMA_BCAST_SPROV_XML = 'application/vnd.oma.bcast.sprov+xml';
    case APPLICATION_VND_OMA_BCAST_STKM = 'application/vnd.oma.bcast.stkm';
    case APPLICATION_VND_OMA_CAB_ADDRESS_BOOK_XML = 'application/vnd.oma.cab-address-book+xml';
    case APPLICATION_VND_OMA_CAB_FEATURE_HANDLER_XML = 'application/vnd.oma.cab-feature-handler+xml';
    case APPLICATION_VND_OMA_CAB_PCC_XML = 'application/vnd.oma.cab-pcc+xml';
    case APPLICATION_VND_OMA_CAB_SUBS_INVITE_XML = 'application/vnd.oma.cab-subs-invite+xml';
    case APPLICATION_VND_OMA_CAB_USER_PREFS_XML = 'application/vnd.oma.cab-user-prefs+xml';
    case APPLICATION_VND_OMA_DCD = 'application/vnd.oma.dcd';
    case APPLICATION_VND_OMA_DCDC = 'application/vnd.oma.dcdc';
    case APPLICATION_VND_OMA_DD2_XML = 'application/vnd.oma.dd2+xml';
    case APPLICATION_VND_OMA_DRM_RISD_XML = 'application/vnd.oma.drm.risd+xml';
    case APPLICATION_VND_OMA_GROUP_USAGE_LIST_XML = 'application/vnd.oma.group-usage-list+xml';
    case APPLICATION_VND_OMA_LWM2M_CBOR = 'application/vnd.oma.lwm2m+cbor';
    case APPLICATION_VND_OMA_LWM2M_JSON = 'application/vnd.oma.lwm2m+json';
    case APPLICATION_VND_OMA_LWM2M_TLV = 'application/vnd.oma.lwm2m+tlv';
    case APPLICATION_VND_OMA_PAL_XML = 'application/vnd.oma.pal+xml';
    case APPLICATION_VND_OMA_POC_DETAILED_PROGRESS_REPORT_XML = 'application/vnd.oma.poc.detailed-progress-report+xml';
    case APPLICATION_VND_OMA_POC_FINAL_REPORT_XML = 'application/vnd.oma.poc.final-report+xml';
    case APPLICATION_VND_OMA_POC_GROUPS_XML = 'application/vnd.oma.poc.groups+xml';
    case APPLICATION_VND_OMA_POC_INVOCATION_DESCRIPTOR_XML = 'application/vnd.oma.poc.invocation-descriptor+xml';
    case APPLICATION_VND_OMA_POC_OPTIMIZED_PROGRESS_REPORT_XML = 'application/vnd.oma.poc.optimized-progress-report+xml';
    case APPLICATION_VND_OMA_PUSH = 'application/vnd.oma.push';
    case APPLICATION_VND_OMA_SCIDM_MESSAGES_XML = 'application/vnd.oma.scidm.messages+xml';
    case APPLICATION_VND_OMA_XCAP_DIRECTORY_XML = 'application/vnd.oma.xcap-directory+xml';
    case APPLICATION_VND_OMADS_EMAIL_XML = 'application/vnd.omads-email+xml';
    case APPLICATION_VND_OMADS_FILE_XML = 'application/vnd.omads-file+xml';
    case APPLICATION_VND_OMADS_FOLDER_XML = 'application/vnd.omads-folder+xml';
    case APPLICATION_VND_OMALOC_SUPL_INIT = 'application/vnd.omaloc-supl-init';
    case APPLICATION_VND_OMA_SCWS_CONFIG = 'application/vnd.oma-scws-config';
    case APPLICATION_VND_OMA_SCWS_HTTP_REQUEST = 'application/vnd.oma-scws-http-request';
    case APPLICATION_VND_OMA_SCWS_HTTP_RESPONSE = 'application/vnd.oma-scws-http-response';
    case APPLICATION_VND_ONEPAGER = 'application/vnd.onepager';
    case APPLICATION_VND_ONEPAGERTAMP = 'application/vnd.onepagertamp';
    case APPLICATION_VND_ONEPAGERTAMX = 'application/vnd.onepagertamx';
    case APPLICATION_VND_ONEPAGERTAT = 'application/vnd.onepagertat';
    case APPLICATION_VND_ONEPAGERTATP = 'application/vnd.onepagertatp';
    case APPLICATION_VND_ONEPAGERTATX = 'application/vnd.onepagertatx';
    case APPLICATION_VND_ONVIF_METADATA = 'application/vnd.onvif.metadata';
    case APPLICATION_VND_OPENBLOX_GAME_BINARY = 'application/vnd.openblox.game-binary';
    case APPLICATION_VND_OPENBLOX_GAME_XML = 'application/vnd.openblox.game+xml';
    case APPLICATION_VND_OPENEYE_OEB = 'application/vnd.openeye.oeb';
    case APPLICATION_VND_OPENSTREETMAP_DATA_XML = 'application/vnd.openstreetmap.data+xml';
    case APPLICATION_VND_OPENTIMESTAMPS_OTS = 'application/vnd.opentimestamps.ots';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_CUSTOM_PROPERTIES_XML = 'application/vnd.openxmlformats-officedocument.custom-properties+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_CUSTOMXMLPROPERTIES_XML = 'application/vnd.openxmlformats-officedocument.customXmlProperties+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWING_XML = 'application/vnd.openxmlformats-officedocument.drawing+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWINGML_CHART_XML = 'application/vnd.openxmlformats-officedocument.drawingml.chart+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWINGML_CHARTSHAPES_XML = 'application/vnd.openxmlformats-officedocument.drawingml.chartshapes+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWINGML_DIAGRAMCOLORS_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramColors+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWINGML_DIAGRAMDATA_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramData+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWINGML_DIAGRAMLAYOUT_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramLayout+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_DRAWINGML_DIAGRAMSTYLE_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramStyle+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_EXTENDED_PROPERTIES_XML = 'application/vnd.openxmlformats-officedocument.extended-properties+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_COMMENTAUTHORS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.commentAuthors+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_COMMENTS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.comments+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_HANDOUTMASTER_XML = 'application/vnd.openxmlformats-officedocument.presentationml.handoutMaster+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_NOTESMASTER_XML = 'application/vnd.openxmlformats-officedocument.presentationml.notesMaster+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_NOTESSLIDE_XML = 'application/vnd.openxmlformats-officedocument.presentationml.notesSlide+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_PRESENTATION = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_PRESENTATION_MAIN_XML = 'application/vnd.openxmlformats-officedocument.presentationml.presentation.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_PRESPROPS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.presProps+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDE = 'application/vnd.openxmlformats-officedocument.presentationml.slide';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDE_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slide+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDELAYOUT_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideLayout+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDEMASTER_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideMaster+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDESHOW = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDESHOW_MAIN_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_SLIDEUPDATEINFO_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideUpdateInfo+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_TABLESTYLES_XML = 'application/vnd.openxmlformats-officedocument.presentationml.tableStyles+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_TAGS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.tags+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_TEMPLATE = 'application/vnd.openxmlformats-officedocument.presentationml.template';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_TEMPLATE_MAIN_XML = 'application/vnd.openxmlformats-officedocument.presentationml.template.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_PRESENTATIONML_VIEWPROPS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.viewProps+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_CALCCHAIN_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.calcChain+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_CHARTSHEET_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.chartsheet+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_COMMENTS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.comments+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_CONNECTIONS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.connections+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_DIALOGSHEET_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.dialogsheet+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_EXTERNALLINK_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.externalLink+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_PIVOTCACHEDEFINITION_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheDefinition+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_PIVOTCACHERECORDS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheRecords+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_PIVOTTABLE_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotTable+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_QUERYTABLE_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.queryTable+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_REVISIONHEADERS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.revisionHeaders+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_REVISIONLOG_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.revisionLog+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_SHAREDSTRINGS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_SHEET = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_SHEET_MAIN_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_SHEETMETADATA_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheetMetadata+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_STYLES_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_TABLE_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.table+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_TABLESINGLECELLS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.tableSingleCells+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_TEMPLATE = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_TEMPLATE_MAIN_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_USERNAMES_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.userNames+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_VOLATILEDEPENDENCIES_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.volatileDependencies+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_SPREADSHEETML_WORKSHEET_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_THEME_XML = 'application/vnd.openxmlformats-officedocument.theme+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_THEMEOVERRIDE_XML = 'application/vnd.openxmlformats-officedocument.themeOverride+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_VMLDRAWING = 'application/vnd.openxmlformats-officedocument.vmlDrawing';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_COMMENTS_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.comments+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_DOCUMENT = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_DOCUMENT_GLOSSARY_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document.glossary+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_DOCUMENT_MAIN_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_ENDNOTES_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.endnotes+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_FONTTABLE_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.fontTable+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_FOOTER_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.footer+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_FOOTNOTES_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.footnotes+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_NUMBERING_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.numbering+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_SETTINGS_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.settings+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_STYLES_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.styles+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_TEMPLATE = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_TEMPLATE_MAIN_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template.main+xml';
    case APPLICATION_VND_OPENXMLFORMATS_OFFICEDOCUMENT_WORDPROCESSINGML_WEBSETTINGS_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.webSettings+xml';
    case APPLICATION_VND_OPENXMLFORMATS_PACKAGE_CORE_PROPERTIES_XML = 'application/vnd.openxmlformats-package.core-properties+xml';
    case APPLICATION_VND_OPENXMLFORMATS_PACKAGE_DIGITAL_SIGNATURE_XMLSIGNATURE_XML = 'application/vnd.openxmlformats-package.digital-signature-xmlsignature+xml';
    case APPLICATION_VND_OPENXMLFORMATS_PACKAGE_RELATIONSHIPS_XML = 'application/vnd.openxmlformats-package.relationships+xml';
    case APPLICATION_VND_ORACLE_RESOURCE_JSON = 'application/vnd.oracle.resource+json';
    case APPLICATION_VND_ORANGE_INDATA = 'application/vnd.orange.indata';
    case APPLICATION_VND_OSA_NETDEPLOY = 'application/vnd.osa.netdeploy';
    case APPLICATION_VND_OSGEO_MAPGUIDE_PACKAGE = 'application/vnd.osgeo.mapguide.package';
    case APPLICATION_VND_OSGI_BUNDLE = 'application/vnd.osgi.bundle';
    case APPLICATION_VND_OSGI_DP = 'application/vnd.osgi.dp';
    case APPLICATION_VND_OSGI_SUBSYSTEM = 'application/vnd.osgi.subsystem';
    case APPLICATION_VND_OTPS_CT_KIP_XML = 'application/vnd.otps.ct-kip+xml';
    case APPLICATION_VND_OXLI_COUNTGRAPH = 'application/vnd.oxli.countgraph';
    case APPLICATION_VND_PAGERDUTY_JSON = 'application/vnd.pagerduty+json';
    case APPLICATION_VND_PALM = 'application/vnd.palm';
    case APPLICATION_VND_PANOPLY = 'application/vnd.panoply';
    case APPLICATION_VND_PAOS_XML = 'application/vnd.paos.xml';
    case APPLICATION_VND_PATENTDIVE = 'application/vnd.patentdive';
    case APPLICATION_VND_PATIENTECOMMSDOC = 'application/vnd.patientecommsdoc';
    case APPLICATION_VND_PAWAAFILE = 'application/vnd.pawaafile';
    case APPLICATION_VND_PCOS = 'application/vnd.pcos';
    case APPLICATION_VND_PG_FORMAT = 'application/vnd.pg.format';
    case APPLICATION_VND_PG_OSASLI = 'application/vnd.pg.osasli';
    case APPLICATION_VND_PIACCESS_APPLICATION_LICENCE = 'application/vnd.piaccess.application-licence';
    case APPLICATION_VND_PICSEL = 'application/vnd.picsel';
    case APPLICATION_VND_PMI_WIDGET = 'application/vnd.pmi.widget';
    case APPLICATION_VND_POC_GROUP_ADVERTISEMENT_XML = 'application/vnd.poc.group-advertisement+xml';
    case APPLICATION_VND_POCKETLEARN = 'application/vnd.pocketlearn';
    case APPLICATION_VND_POWERBUILDER6 = 'application/vnd.powerbuilder6';
    case APPLICATION_VND_POWERBUILDER6_S = 'application/vnd.powerbuilder6-s';
    case APPLICATION_VND_POWERBUILDER7 = 'application/vnd.powerbuilder7';
    case APPLICATION_VND_POWERBUILDER75 = 'application/vnd.powerbuilder75';
    case APPLICATION_VND_POWERBUILDER75_S = 'application/vnd.powerbuilder75-s';
    case APPLICATION_VND_POWERBUILDER7_S = 'application/vnd.powerbuilder7-s';
    case APPLICATION_VND_PREMINET = 'application/vnd.preminet';
    case APPLICATION_VND_PREVIEWSYSTEMS_BOX = 'application/vnd.previewsystems.box';
    case APPLICATION_VND_PROTEUS_MAGAZINE = 'application/vnd.proteus.magazine';
    case APPLICATION_VND_PSFS = 'application/vnd.psfs';
    case APPLICATION_VND_PT_MUNDUSMUNDI = 'application/vnd.pt.mundusmundi';
    case APPLICATION_VND_PUBLISHARE_DELTA_TREE = 'application/vnd.publishare-delta-tree';
    case APPLICATION_VND_PVI_PTID1 = 'application/vnd.pvi.ptid1';
    case APPLICATION_VND_PWG_MULTIPLEXED = 'application/vnd.pwg-multiplexed';
    case APPLICATION_VND_PWG_XHTML_PRINT_XML = 'application/vnd.pwg-xhtml-print+xml';
    case APPLICATION_VND_QUALCOMM_BREW_APP_RES = 'application/vnd.qualcomm.brew-app-res';
    case APPLICATION_VND_QUARANTAINENET = 'application/vnd.quarantainenet';
    case APPLICATION_VND_QUARK_QUARKXPRESS = 'application/vnd.Quark.QuarkXPress';
    case APPLICATION_VND_QUOBJECT_QUOXDOCUMENT = 'application/vnd.quobject-quoxdocument';
    case APPLICATION_VND_RADISYS_MOML_XML = 'application/vnd.radisys.moml+xml';
    case APPLICATION_VND_RADISYS_MSML_AUDIT_CONF_XML = 'application/vnd.radisys.msml-audit-conf+xml';
    case APPLICATION_VND_RADISYS_MSML_AUDIT_CONN_XML = 'application/vnd.radisys.msml-audit-conn+xml';
    case APPLICATION_VND_RADISYS_MSML_AUDIT_DIALOG_XML = 'application/vnd.radisys.msml-audit-dialog+xml';
    case APPLICATION_VND_RADISYS_MSML_AUDIT_STREAM_XML = 'application/vnd.radisys.msml-audit-stream+xml';
    case APPLICATION_VND_RADISYS_MSML_AUDIT_XML = 'application/vnd.radisys.msml-audit+xml';
    case APPLICATION_VND_RADISYS_MSML_CONF_XML = 'application/vnd.radisys.msml-conf+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_BASE_XML = 'application/vnd.radisys.msml-dialog-base+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_FAX_DETECT_XML = 'application/vnd.radisys.msml-dialog-fax-detect+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_FAX_SENDRECV_XML = 'application/vnd.radisys.msml-dialog-fax-sendrecv+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_GROUP_XML = 'application/vnd.radisys.msml-dialog-group+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_SPEECH_XML = 'application/vnd.radisys.msml-dialog-speech+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_TRANSFORM_XML = 'application/vnd.radisys.msml-dialog-transform+xml';
    case APPLICATION_VND_RADISYS_MSML_DIALOG_XML = 'application/vnd.radisys.msml-dialog+xml';
    case APPLICATION_VND_RADISYS_MSML_XML = 'application/vnd.radisys.msml+xml';
    case APPLICATION_VND_RAINSTOR_DATA = 'application/vnd.rainstor.data';
    case APPLICATION_VND_RAPID = 'application/vnd.rapid';
    case APPLICATION_VND_RAR = 'application/vnd.rar';
    case APPLICATION_VND_REALVNC_BED = 'application/vnd.realvnc.bed';
    case APPLICATION_VND_RECORDARE_MUSICXML = 'application/vnd.recordare.musicxml';
    case APPLICATION_VND_RECORDARE_MUSICXML_XML = 'application/vnd.recordare.musicxml+xml';
    case APPLICATION_VND_RELPIPE = 'application/vnd.relpipe';
    case APPLICATION_VND_RENLEARN_RLPRINT = 'application/vnd.RenLearn.rlprint';
    case APPLICATION_VND_RESILIENT_LOGIC = 'application/vnd.resilient.logic';
    case APPLICATION_VND_RESTFUL_JSON = 'application/vnd.restful+json';
    case APPLICATION_VND_RIG_CRYPTONOTE = 'application/vnd.rig.cryptonote';
    case APPLICATION_VND_ROUTE66_LINK66_XML = 'application/vnd.route66.link66+xml';
    case APPLICATION_VND_RS_274X = 'application/vnd.rs-274x';
    case APPLICATION_VND_RUCKUS_DOWNLOAD = 'application/vnd.ruckus.download';
    case APPLICATION_VND_S3SMS = 'application/vnd.s3sms';
    case APPLICATION_VND_SAILINGTRACKER_TRACK = 'application/vnd.sailingtracker.track';
    case APPLICATION_VND_SAR = 'application/vnd.sar';
    case APPLICATION_VND_SBM_CID = 'application/vnd.sbm.cid';
    case APPLICATION_VND_SBM_MID2 = 'application/vnd.sbm.mid2';
    case APPLICATION_VND_SCRIBUS = 'application/vnd.scribus';
    case APPLICATION_VND_SEALED_3DF = 'application/vnd.sealed.3df';
    case APPLICATION_VND_SEALED_CSF = 'application/vnd.sealed.csf';
    case APPLICATION_VND_SEALED_DOC = 'application/vnd.sealed.doc';
    case APPLICATION_VND_SEALED_EML = 'application/vnd.sealed.eml';
    case APPLICATION_VND_SEALED_MHT = 'application/vnd.sealed.mht';
    case APPLICATION_VND_SEALED_NET = 'application/vnd.sealed.net';
    case APPLICATION_VND_SEALED_PPT = 'application/vnd.sealed.ppt';
    case APPLICATION_VND_SEALED_TIFF = 'application/vnd.sealed.tiff';
    case APPLICATION_VND_SEALED_XLS = 'application/vnd.sealed.xls';
    case APPLICATION_VND_SEALEDMEDIA_SOFTSEAL_HTML = 'application/vnd.sealedmedia.softseal.html';
    case APPLICATION_VND_SEALEDMEDIA_SOFTSEAL_PDF = 'application/vnd.sealedmedia.softseal.pdf';
    case APPLICATION_VND_SEEMAIL = 'application/vnd.seemail';
    case APPLICATION_VND_SEIS_JSON = 'application/vnd.seis+json';
    case APPLICATION_VND_SEMA = 'application/vnd.sema';
    case APPLICATION_VND_SEMD = 'application/vnd.semd';
    case APPLICATION_VND_SEMF = 'application/vnd.semf';
    case APPLICATION_VND_SHADE_SAVE_FILE = 'application/vnd.shade-save-file';
    case APPLICATION_VND_SHANA_INFORMED_FORMDATA = 'application/vnd.shana.informed.formdata';
    case APPLICATION_VND_SHANA_INFORMED_FORMTEMPLATE = 'application/vnd.shana.informed.formtemplate';
    case APPLICATION_VND_SHANA_INFORMED_INTERCHANGE = 'application/vnd.shana.informed.interchange';
    case APPLICATION_VND_SHANA_INFORMED_PACKAGE = 'application/vnd.shana.informed.package';
    case APPLICATION_VND_SHOOTPROOF_JSON = 'application/vnd.shootproof+json';
    case APPLICATION_VND_SHOPKICK_JSON = 'application/vnd.shopkick+json';
    case APPLICATION_VND_SHP = 'application/vnd.shp';
    case APPLICATION_VND_SHX = 'application/vnd.shx';
    case APPLICATION_VND_SIGROK_SESSION = 'application/vnd.sigrok.session';
    case APPLICATION_VND_SIMTECH_MINDMAPPER = 'application/vnd.SimTech-MindMapper';
    case APPLICATION_VND_SIREN_JSON = 'application/vnd.siren+json';
    case APPLICATION_VND_SMAF = 'application/vnd.smaf';
    case APPLICATION_VND_SMART_NOTEBOOK = 'application/vnd.smart.notebook';
    case APPLICATION_VND_SMART_TEACHER = 'application/vnd.smart.teacher';
    case APPLICATION_VND_SMINTIO_PORTALS_ARCHIVE = 'application/vnd.smintio.portals.archive';
    case APPLICATION_VND_SNESDEV_PAGE_TABLE = 'application/vnd.snesdev-page-table';
    case APPLICATION_VND_SOFTWARE602_FILLER_FORM_XML = 'application/vnd.software602.filler.form+xml';
    case APPLICATION_VND_SOFTWARE602_FILLER_FORM_XML_ZIP = 'application/vnd.software602.filler.form-xml-zip';
    case APPLICATION_VND_SOLENT_SDKM_XML = 'application/vnd.solent.sdkm+xml';
    case APPLICATION_VND_SPOTFIRE_DXP = 'application/vnd.spotfire.dxp';
    case APPLICATION_VND_SPOTFIRE_SFS = 'application/vnd.spotfire.sfs';
    case APPLICATION_VND_SQLITE3 = 'application/vnd.sqlite3';
    case APPLICATION_VND_SSS_COD = 'application/vnd.sss-cod';
    case APPLICATION_VND_SSS_DTF = 'application/vnd.sss-dtf';
    case APPLICATION_VND_SSS_NTF = 'application/vnd.sss-ntf';
    case APPLICATION_VND_STEPMANIA_PACKAGE = 'application/vnd.stepmania.package';
    case APPLICATION_VND_STEPMANIA_STEPCHART = 'application/vnd.stepmania.stepchart';
    case APPLICATION_VND_STREET_STREAM = 'application/vnd.street-stream';
    case APPLICATION_VND_SUN_WADL_XML = 'application/vnd.sun.wadl+xml';
    case APPLICATION_VND_SUS_CALENDAR = 'application/vnd.sus-calendar';
    case APPLICATION_VND_SVD = 'application/vnd.svd';
    case APPLICATION_VND_SWIFTVIEW_ICS = 'application/vnd.swiftview-ics';
    case APPLICATION_VND_SYBYL_MOL2 = 'application/vnd.sybyl.mol2';
    case APPLICATION_VND_SYCLE_XML = 'application/vnd.sycle+xml';
    case APPLICATION_VND_SYFT_JSON = 'application/vnd.syft+json';
    case APPLICATION_VND_SYNCML_DM_NOTIFICATION = 'application/vnd.syncml.dm.notification';
    case APPLICATION_VND_SYNCML_DMDDF_XML = 'application/vnd.syncml.dmddf+xml';
    case APPLICATION_VND_SYNCML_DMTNDS_WBXML = 'application/vnd.syncml.dmtnds+wbxml';
    case APPLICATION_VND_SYNCML_DMTNDS_XML = 'application/vnd.syncml.dmtnds+xml';
    case APPLICATION_VND_SYNCML_DMDDF_WBXML = 'application/vnd.syncml.dmddf+wbxml';
    case APPLICATION_VND_SYNCML_DM_WBXML = 'application/vnd.syncml.dm+wbxml';
    case APPLICATION_VND_SYNCML_DM_XML = 'application/vnd.syncml.dm+xml';
    case APPLICATION_VND_SYNCML_DS_NOTIFICATION = 'application/vnd.syncml.ds.notification';
    case APPLICATION_VND_SYNCML_XML = 'application/vnd.syncml+xml';
    case APPLICATION_VND_TABLESCHEMA_JSON = 'application/vnd.tableschema+json';
    case APPLICATION_VND_TAO_INTENT_MODULE_ARCHIVE = 'application/vnd.tao.intent-module-archive';
    case APPLICATION_VND_TCPDUMP_PCAP = 'application/vnd.tcpdump.pcap';
    case APPLICATION_VND_THINK_CELL_PPTTC_JSON = 'application/vnd.think-cell.ppttc+json';
    case APPLICATION_VND_TML = 'application/vnd.tml';
    case APPLICATION_VND_TMD_MEDIAFLEX_API_XML = 'application/vnd.tmd.mediaflex.api+xml';
    case APPLICATION_VND_TMOBILE_LIVETV = 'application/vnd.tmobile-livetv';
    case APPLICATION_VND_TRI_ONESOURCE = 'application/vnd.tri.onesource';
    case APPLICATION_VND_TRID_TPT = 'application/vnd.trid.tpt';
    case APPLICATION_VND_TRISCAPE_MXS = 'application/vnd.triscape.mxs';
    case APPLICATION_VND_TRUEAPP = 'application/vnd.trueapp';
    case APPLICATION_VND_TRUEDOC = 'application/vnd.truedoc';
    case APPLICATION_VND_UBISOFT_WEBPLAYER = 'application/vnd.ubisoft.webplayer';
    case APPLICATION_VND_UFDL = 'application/vnd.ufdl';
    case APPLICATION_VND_UIC_OSDM_JSON = 'application/vnd.uic.osdm+json';
    case APPLICATION_VND_UIQ_THEME = 'application/vnd.uiq.theme';
    case APPLICATION_VND_UMAJIN = 'application/vnd.umajin';
    case APPLICATION_VND_UNITY = 'application/vnd.unity';
    case APPLICATION_VND_UOML_XML = 'application/vnd.uoml+xml';
    case APPLICATION_VND_UPLANET_ALERT = 'application/vnd.uplanet.alert';
    case APPLICATION_VND_UPLANET_ALERT_WBXML = 'application/vnd.uplanet.alert-wbxml';
    case APPLICATION_VND_UPLANET_BEARER_CHOICE = 'application/vnd.uplanet.bearer-choice';
    case APPLICATION_VND_UPLANET_BEARER_CHOICE_WBXML = 'application/vnd.uplanet.bearer-choice-wbxml';
    case APPLICATION_VND_UPLANET_CACHEOP = 'application/vnd.uplanet.cacheop';
    case APPLICATION_VND_UPLANET_CACHEOP_WBXML = 'application/vnd.uplanet.cacheop-wbxml';
    case APPLICATION_VND_UPLANET_CHANNEL = 'application/vnd.uplanet.channel';
    case APPLICATION_VND_UPLANET_CHANNEL_WBXML = 'application/vnd.uplanet.channel-wbxml';
    case APPLICATION_VND_UPLANET_LIST = 'application/vnd.uplanet.list';
    case APPLICATION_VND_UPLANET_LISTCMD = 'application/vnd.uplanet.listcmd';
    case APPLICATION_VND_UPLANET_LISTCMD_WBXML = 'application/vnd.uplanet.listcmd-wbxml';
    case APPLICATION_VND_UPLANET_LIST_WBXML = 'application/vnd.uplanet.list-wbxml';
    case APPLICATION_VND_URI_MAP = 'application/vnd.uri-map';
    case APPLICATION_VND_UPLANET_SIGNAL = 'application/vnd.uplanet.signal';
    case APPLICATION_VND_VALVE_SOURCE_MATERIAL = 'application/vnd.valve.source.material';
    case APPLICATION_VND_VCX = 'application/vnd.vcx';
    case APPLICATION_VND_VD_STUDY = 'application/vnd.vd-study';
    case APPLICATION_VND_VECTORWORKS = 'application/vnd.vectorworks';
    case APPLICATION_VND_VEL_JSON = 'application/vnd.vel+json';
    case APPLICATION_VND_VERIMATRIX_VCAS = 'application/vnd.verimatrix.vcas';
    case APPLICATION_VND_VERITONE_AION_JSON = 'application/vnd.veritone.aion+json';
    case APPLICATION_VND_VERYANT_THIN = 'application/vnd.veryant.thin';
    case APPLICATION_VND_VES_ENCRYPTED = 'application/vnd.ves.encrypted';
    case APPLICATION_VND_VIDSOFT_VIDCONFERENCE = 'application/vnd.vidsoft.vidconference';
    case APPLICATION_VND_VISIO = 'application/vnd.visio';
    case APPLICATION_VND_VISIONARY = 'application/vnd.visionary';
    case APPLICATION_VND_VIVIDENCE_SCRIPTFILE = 'application/vnd.vividence.scriptfile';
    case APPLICATION_VND_VSF = 'application/vnd.vsf';
    case APPLICATION_VND_WAP_SIC = 'application/vnd.wap.sic';
    case APPLICATION_VND_WAP_SLC = 'application/vnd.wap.slc';
    case APPLICATION_VND_WAP_WBXML = 'application/vnd.wap.wbxml';
    case APPLICATION_VND_WAP_WMLC = 'application/vnd.wap.wmlc';
    case APPLICATION_VND_WAP_WMLSCRIPTC = 'application/vnd.wap.wmlscriptc';
    case APPLICATION_VND_WASMFLOW_WAFL = 'application/vnd.wasmflow.wafl';
    case APPLICATION_VND_WEBTURBO = 'application/vnd.webturbo';
    case APPLICATION_VND_WFA_DPP = 'application/vnd.wfa.dpp';
    case APPLICATION_VND_WFA_P2P = 'application/vnd.wfa.p2p';
    case APPLICATION_VND_WFA_WSC = 'application/vnd.wfa.wsc';
    case APPLICATION_VND_WINDOWS_DEVICEPAIRING = 'application/vnd.windows.devicepairing';
    case APPLICATION_VND_WMC = 'application/vnd.wmc';
    case APPLICATION_VND_WMF_BOOTSTRAP = 'application/vnd.wmf.bootstrap';
    case APPLICATION_VND_WOLFRAM_MATHEMATICA = 'application/vnd.wolfram.mathematica';
    case APPLICATION_VND_WOLFRAM_MATHEMATICA_PACKAGE = 'application/vnd.wolfram.mathematica.package';
    case APPLICATION_VND_WOLFRAM_PLAYER = 'application/vnd.wolfram.player';
    case APPLICATION_VND_WORDLIFT = 'application/vnd.wordlift';
    case APPLICATION_VND_WORDPERFECT = 'application/vnd.wordperfect';
    case APPLICATION_VND_WQD = 'application/vnd.wqd';
    case APPLICATION_VND_WRQ_HP3000_LABELLED = 'application/vnd.wrq-hp3000-labelled';
    case APPLICATION_VND_WT_STF = 'application/vnd.wt.stf';
    case APPLICATION_VND_WV_CSP_XML = 'application/vnd.wv.csp+xml';
    case APPLICATION_VND_WV_CSP_WBXML = 'application/vnd.wv.csp+wbxml';
    case APPLICATION_VND_WV_SSP_XML = 'application/vnd.wv.ssp+xml';
    case APPLICATION_VND_XACML_JSON = 'application/vnd.xacml+json';
    case APPLICATION_VND_XARA = 'application/vnd.xara';
    case APPLICATION_VND_XARIN_CPJ = 'application/vnd.xarin.cpj';
    case APPLICATION_VND_XECRETS_ENCRYPTED = 'application/vnd.xecrets-encrypted';
    case APPLICATION_VND_XFDL = 'application/vnd.xfdl';
    case APPLICATION_VND_XFDL_WEBFORM = 'application/vnd.xfdl.webform';
    case APPLICATION_VND_XMI_XML = 'application/vnd.xmi+xml';
    case APPLICATION_VND_XMPIE_CPKG = 'application/vnd.xmpie.cpkg';
    case APPLICATION_VND_XMPIE_DPKG = 'application/vnd.xmpie.dpkg';
    case APPLICATION_VND_XMPIE_PLAN = 'application/vnd.xmpie.plan';
    case APPLICATION_VND_XMPIE_PPKG = 'application/vnd.xmpie.ppkg';
    case APPLICATION_VND_XMPIE_XLIM = 'application/vnd.xmpie.xlim';
    case APPLICATION_VND_YAMAHA_HV_DIC = 'application/vnd.yamaha.hv-dic';
    case APPLICATION_VND_YAMAHA_HV_SCRIPT = 'application/vnd.yamaha.hv-script';
    case APPLICATION_VND_YAMAHA_HV_VOICE = 'application/vnd.yamaha.hv-voice';
    case APPLICATION_VND_YAMAHA_OPENSCOREFORMAT_OSFPVG_XML = 'application/vnd.yamaha.openscoreformat.osfpvg+xml';
    case APPLICATION_VND_YAMAHA_OPENSCOREFORMAT = 'application/vnd.yamaha.openscoreformat';
    case APPLICATION_VND_YAMAHA_REMOTE_SETUP = 'application/vnd.yamaha.remote-setup';
    case APPLICATION_VND_YAMAHA_SMAF_AUDIO = 'application/vnd.yamaha.smaf-audio';
    case APPLICATION_VND_YAMAHA_SMAF_PHRASE = 'application/vnd.yamaha.smaf-phrase';
    case APPLICATION_VND_YAMAHA_THROUGH_NGN = 'application/vnd.yamaha.through-ngn';
    case APPLICATION_VND_YAMAHA_TUNNEL_UDPENCAP = 'application/vnd.yamaha.tunnel-udpencap';
    case APPLICATION_VND_YAOWEME = 'application/vnd.yaoweme';
    case APPLICATION_VND_YELLOWRIVER_CUSTOM_MENU = 'application/vnd.yellowriver-custom-menu';
    case APPLICATION_VND_YOUTUBE_YT = 'application/vnd.youtube.yt';
    case APPLICATION_VND_ZUL = 'application/vnd.zul';
    case APPLICATION_VND_ZZAZZ_DECK_XML = 'application/vnd.zzazz.deck+xml';
    case APPLICATION_VOICEXML_XML = 'application/voicexml+xml';
    case APPLICATION_VOUCHER_CMS_JSON = 'application/voucher-cms+json';
    case APPLICATION_VP = 'application/vp';
    case APPLICATION_VQ_RTCPXR = 'application/vq-rtcpxr';
    case APPLICATION_WASM = 'application/wasm';
    case APPLICATION_WATCHERINFO_XML = 'application/watcherinfo+xml';
    case APPLICATION_WEBPUSH_OPTIONS_JSON = 'application/webpush-options+json';
    case APPLICATION_WHOISPP_QUERY = 'application/whoispp-query';
    case APPLICATION_WHOISPP_RESPONSE = 'application/whoispp-response';
    case APPLICATION_WIDGET = 'application/widget';
    case APPLICATION_WITA = 'application/wita';
    case APPLICATION_WORDPERFECT5_1 = 'application/wordperfect5.1';
    case APPLICATION_WSDL_XML = 'application/wsdl+xml';
    case APPLICATION_WSPOLICY_XML = 'application/wspolicy+xml';
    case APPLICATION_X_PKI_MESSAGE = 'application/x-pki-message';
    case APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    case APPLICATION_X_X509_CA_CERT = 'application/x-x509-ca-cert';
    case APPLICATION_X_X509_CA_RA_CERT = 'application/x-x509-ca-ra-cert';
    case APPLICATION_X_X509_NEXT_CA_CERT = 'application/x-x509-next-ca-cert';
    case APPLICATION_X400_BP = 'application/x400-bp';
    case APPLICATION_XACML_XML = 'application/xacml+xml';
    case APPLICATION_XCAP_ATT_XML = 'application/xcap-att+xml';
    case APPLICATION_XCAP_CAPS_XML = 'application/xcap-caps+xml';
    case APPLICATION_XCAP_DIFF_XML = 'application/xcap-diff+xml';
    case APPLICATION_XCAP_EL_XML = 'application/xcap-el+xml';
    case APPLICATION_XCAP_ERROR_XML = 'application/xcap-error+xml';
    case APPLICATION_XCAP_NS_XML = 'application/xcap-ns+xml';
    case APPLICATION_XCON_CONFERENCE_INFO_DIFF_XML = 'application/xcon-conference-info-diff+xml';
    case APPLICATION_XCON_CONFERENCE_INFO_XML = 'application/xcon-conference-info+xml';
    case APPLICATION_XENC_XML = 'application/xenc+xml';
    case APPLICATION_XFDF = 'application/xfdf';
    case APPLICATION_XHTML_XML = 'application/xhtml+xml';
    case APPLICATION_XLIFF_XML = 'application/xliff+xml';
    case APPLICATION_XML = 'application/xml';
    case APPLICATION_XML_DTD = 'application/xml-dtd';
    case APPLICATION_XML_EXTERNAL_PARSED_ENTITY = 'application/xml-external-parsed-entity';
    case APPLICATION_XML_PATCH_XML = 'application/xml-patch+xml';
    case APPLICATION_XMPP_XML = 'application/xmpp+xml';
    case APPLICATION_XOP_XML = 'application/xop+xml';
    case APPLICATION_XSLT_XML = 'application/xslt+xml';
    case APPLICATION_XV_XML = 'application/xv+xml';
    case APPLICATION_YAML = 'application/yaml';
    case APPLICATION_YANG = 'application/yang';
    case APPLICATION_YANG_DATA_CBOR = 'application/yang-data+cbor';
    case APPLICATION_YANG_DATA_JSON = 'application/yang-data+json';
    case APPLICATION_YANG_DATA_XML = 'application/yang-data+xml';
    case APPLICATION_YANG_PATCH_JSON = 'application/yang-patch+json';
    case APPLICATION_YANG_PATCH_XML = 'application/yang-patch+xml';
    case APPLICATION_YANG_SID_JSON = 'application/yang-sid+json';
    case APPLICATION_YIN_XML = 'application/yin+xml';
    case APPLICATION_ZIP = 'application/zip';
    case APPLICATION_ZLIB = 'application/zlib';
    case APPLICATION_ZSTD = 'application/zstd';

        // Audio Types
    case AUDIO_1D_INTERLEAVED_PARITYFEC = 'audio/1d-interleaved-parityfec';
    case AUDIO_32KADPCM = 'audio/32kadpcm';
    case AUDIO_3GPP = 'audio/3gpp';
    case AUDIO_3GPP2 = 'audio/3gpp2';
    case AUDIO_AAC = 'audio/aac';
    case AUDIO_AC3 = 'audio/ac3';
    case AUDIO_AMR = 'audio/AMR';
    case AUDIO_AMR_WB = 'audio/AMR-WB';
    case AUDIO_AMR_WB_ = 'audio/amr-wb+';
    case AUDIO_APTX = 'audio/aptx';
    case AUDIO_ASC = 'audio/asc';
    case AUDIO_ATRAC_ADVANCED_LOSSLESS = 'audio/ATRAC-ADVANCED-LOSSLESS';
    case AUDIO_ATRAC_X = 'audio/ATRAC-X';
    case AUDIO_ATRAC3 = 'audio/ATRAC3';
    case AUDIO_BASIC = 'audio/basic';
    case AUDIO_BV16 = 'audio/BV16';
    case AUDIO_BV32 = 'audio/BV32';
    case AUDIO_CLEARMODE = 'audio/clearmode';
    case AUDIO_CN = 'audio/CN';
    case AUDIO_DAT12 = 'audio/DAT12';
    case AUDIO_DLS = 'audio/dls';
    case AUDIO_DSR_ES201108 = 'audio/dsr-es201108';
    case AUDIO_DSR_ES202050 = 'audio/dsr-es202050';
    case AUDIO_DSR_ES202211 = 'audio/dsr-es202211';
    case AUDIO_DSR_ES202212 = 'audio/dsr-es202212';
    case AUDIO_DV = 'audio/DV';
    case AUDIO_DVI4 = 'audio/DVI4';
    case AUDIO_EAC3 = 'audio/eac3';
    case AUDIO_ENCAPRTP = 'audio/encaprtp';
    case AUDIO_EVRC = 'audio/EVRC';
    case AUDIO_EVRC_QCP = 'audio/EVRC-QCP';
    case AUDIO_EVRC0 = 'audio/EVRC0';
    case AUDIO_EVRC1 = 'audio/EVRC1';
    case AUDIO_EVRCB = 'audio/EVRCB';
    case AUDIO_EVRCB0 = 'audio/EVRCB0';
    case AUDIO_EVRCB1 = 'audio/EVRCB1';
    case AUDIO_EVRCNW = 'audio/EVRCNW';
    case AUDIO_EVRCNW0 = 'audio/EVRCNW0';
    case AUDIO_EVRCNW1 = 'audio/EVRCNW1';
    case AUDIO_EVRCWB = 'audio/EVRCWB';
    case AUDIO_EVRCWB0 = 'audio/EVRCWB0';
    case AUDIO_EVRCWB1 = 'audio/EVRCWB1';
    case AUDIO_EVS = 'audio/EVS';
    case AUDIO_EXAMPLE = 'audio/example';
    case AUDIO_FLAC = 'audio/flac';
    case AUDIO_FLEXFEC = 'audio/flexfec';
    case AUDIO_FWDRED = 'audio/fwdred';
    case AUDIO_G711_0 = 'audio/G711-0';
    case AUDIO_G719 = 'audio/G719';
    case AUDIO_G7221 = 'audio/G7221';
    case AUDIO_G722 = 'audio/G722';
    case AUDIO_G723 = 'audio/G723';
    case AUDIO_G726_16 = 'audio/G726-16';
    case AUDIO_G726_24 = 'audio/G726-24';
    case AUDIO_G726_32 = 'audio/G726-32';
    case AUDIO_G726_40 = 'audio/G726-40';
    case AUDIO_G728 = 'audio/G728';
    case AUDIO_G729 = 'audio/G729';
    case AUDIO_G7291 = 'audio/G7291';
    case AUDIO_G729D = 'audio/G729D';
    case AUDIO_G729E = 'audio/G729E';
    case AUDIO_GSM = 'audio/GSM';
    case AUDIO_GSM_EFR = 'audio/GSM-EFR';
    case AUDIO_GSM_HR_08 = 'audio/GSM-HR-08';
    case AUDIO_ILBC = 'audio/iLBC';
    case AUDIO_IP_MR_V2_5 = 'audio/ip-mr_v2.5';
    case AUDIO_L8 = 'audio/L8';
    case AUDIO_L16 = 'audio/L16';
    case AUDIO_L20 = 'audio/L20';
    case AUDIO_L24 = 'audio/L24';
    case AUDIO_LPC = 'audio/LPC';
    case AUDIO_MATROSKA = 'audio/matroska';
    case AUDIO_MELP = 'audio/MELP';
    case AUDIO_MELP600 = 'audio/MELP600';
    case AUDIO_MELP1200 = 'audio/MELP1200';
    case AUDIO_MELP2400 = 'audio/MELP2400';
    case AUDIO_MHAS = 'audio/mhas';
    case AUDIO_MIDI_CLIP = 'audio/midi-clip';
    case AUDIO_MOBILE_XMF = 'audio/mobile-xmf';
    case AUDIO_MPA = 'audio/MPA';
    case AUDIO_MP4 = 'audio/mp4';
    case AUDIO_MP4A_LATM = 'audio/MP4A-LATM';
    case AUDIO_MPA_ROBUST = 'audio/mpa-robust';
    case AUDIO_MPEG = 'audio/mpeg';
    case AUDIO_MPEG4_GENERIC = 'audio/mpeg4-generic';
    case AUDIO_OGG = 'audio/ogg';
    case AUDIO_OPUS = 'audio/opus';
    case AUDIO_PARITYFEC = 'audio/parityfec';
    case AUDIO_PCMA = 'audio/PCMA';
    case AUDIO_PCMA_WB = 'audio/PCMA-WB';
    case AUDIO_PCMU = 'audio/PCMU';
    case AUDIO_PCMU_WB = 'audio/PCMU-WB';
    case AUDIO_PRS_SID = 'audio/prs.sid';
    case AUDIO_QCELP = 'audio/QCELP';
    case AUDIO_RAPTORFEC = 'audio/raptorfec';
    case AUDIO_RED = 'audio/RED';
    case AUDIO_RTP_ENC_AESCM128 = 'audio/rtp-enc-aescm128';
    case AUDIO_RTPLOOPBACK = 'audio/rtploopback';
    case AUDIO_RTP_MIDI = 'audio/rtp-midi';
    case AUDIO_RTX = 'audio/rtx';
    case AUDIO_SCIP = 'audio/scip';
    case AUDIO_SMV = 'audio/SMV';
    case AUDIO_SMV0 = 'audio/SMV0';
    case AUDIO_SMV_QCP = 'audio/SMV-QCP';
    case AUDIO_SOFA = 'audio/sofa';
    case AUDIO_SP_MIDI = 'audio/sp-midi';
    case AUDIO_SPEEX = 'audio/speex';
    case AUDIO_T140C = 'audio/t140c';
    case AUDIO_T38 = 'audio/t38';
    case AUDIO_TELEPHONE_EVENT = 'audio/telephone-event';
    case AUDIO_TETRA_ACELP = 'audio/TETRA_ACELP';
    case AUDIO_TETRA_ACELP_BB = 'audio/TETRA_ACELP_BB';
    case AUDIO_TONE = 'audio/tone';
    case AUDIO_TSVCIS = 'audio/TSVCIS';
    case AUDIO_UEMCLIP = 'audio/UEMCLIP';
    case AUDIO_ULPFEC = 'audio/ulpfec';
    case AUDIO_USAC = 'audio/usac';
    case AUDIO_VDVI = 'audio/VDVI';
    case AUDIO_VMR_WB = 'audio/VMR-WB';
    case AUDIO_VND_3GPP_IUFP = 'audio/vnd.3gpp.iufp';
    case AUDIO_VND_4SB = 'audio/vnd.4SB';
    case AUDIO_VND_AUDIOKOZ = 'audio/vnd.audiokoz';
    case AUDIO_VND_CELP = 'audio/vnd.CELP';
    case AUDIO_VND_CISCO_NSE = 'audio/vnd.cisco.nse';
    case AUDIO_VND_CMLES_RADIO_EVENTS = 'audio/vnd.cmles.radio-events';
    case AUDIO_VND_CNS_ANP1 = 'audio/vnd.cns.anp1';
    case AUDIO_VND_CNS_INF1 = 'audio/vnd.cns.inf1';
    case AUDIO_VND_DECE_AUDIO = 'audio/vnd.dece.audio';
    case AUDIO_VND_DIGITAL_WINDS = 'audio/vnd.digital-winds';
    case AUDIO_VND_DLNA_ADTS = 'audio/vnd.dlna.adts';
    case AUDIO_VND_DOLBY_HEAAC_1 = 'audio/vnd.dolby.heaac.1';
    case AUDIO_VND_DOLBY_HEAAC_2 = 'audio/vnd.dolby.heaac.2';
    case AUDIO_VND_DOLBY_MLP = 'audio/vnd.dolby.mlp';
    case AUDIO_VND_DOLBY_MPS = 'audio/vnd.dolby.mps';
    case AUDIO_VND_DOLBY_PL2 = 'audio/vnd.dolby.pl2';
    case AUDIO_VND_DOLBY_PL2X = 'audio/vnd.dolby.pl2x';
    case AUDIO_VND_DOLBY_PL2Z = 'audio/vnd.dolby.pl2z';
    case AUDIO_VND_DOLBY_PULSE_1 = 'audio/vnd.dolby.pulse.1';
    case AUDIO_VND_DRA = 'audio/vnd.dra';
    case AUDIO_VND_DTS = 'audio/vnd.dts';
    case AUDIO_VND_DTS_HD = 'audio/vnd.dts.hd';
    case AUDIO_VND_DTS_UHD = 'audio/vnd.dts.uhd';
    case AUDIO_VND_DVB_FILE = 'audio/vnd.dvb.file';
    case AUDIO_VND_EVERAD_PLJ = 'audio/vnd.everad.plj';
    case AUDIO_VND_HNS_AUDIO = 'audio/vnd.hns.audio';
    case AUDIO_VND_LUCENT_VOICE = 'audio/vnd.lucent.voice';
    case AUDIO_VND_MS_PLAYREADY_MEDIA_PYA = 'audio/vnd.ms-playready.media.pya';
    case AUDIO_VND_NOKIA_MOBILE_XMF = 'audio/vnd.nokia.mobile-xmf';
    case AUDIO_VND_NORTEL_VBK = 'audio/vnd.nortel.vbk';
    case AUDIO_VND_NUERA_ECELP4800 = 'audio/vnd.nuera.ecelp4800';
    case AUDIO_VND_NUERA_ECELP7470 = 'audio/vnd.nuera.ecelp7470';
    case AUDIO_VND_NUERA_ECELP9600 = 'audio/vnd.nuera.ecelp9600';
    case AUDIO_VND_OCTEL_SBC = 'audio/vnd.octel.sbc';
    case AUDIO_VND_PRESONUS_MULTITRACK = 'audio/vnd.presonus.multitrack';
    case AUDIO_VND_QCELP = 'audio/vnd.qcelp';
    case AUDIO_VND_RHETOREX_32KADPCM = 'audio/vnd.rhetorex.32kadpcm';
    case AUDIO_VND_RIP = 'audio/vnd.rip';
    case AUDIO_VND_SEALEDMEDIA_SOFTSEAL_MPEG = 'audio/vnd.sealedmedia.softseal.mpeg';
    case AUDIO_VND_VMX_CVSD = 'audio/vnd.vmx.cvsd';
    case AUDIO_VORBIS = 'audio/vorbis';
    case AUDIO_VORBIS_CONFIG = 'audio/vorbis-config';

        // Example Type
    case EXAMPLE = 'example';

        // Font Types
    case FONT_COLLECTION = 'font/collection';
    case FONT_OTF = 'font/otf';
    case FONT_SFNT = 'font/sfnt';
    case FONT_TTF = 'font/ttf';
    case FONT_WOFF = 'font/woff';
    case FONT_WOFF2 = 'font/woff2';

        // Haptic Types
    case HAPTICS_IVS = 'haptics/ivs';
    case HAPTICS_HJIF = 'haptics/hjif';
    case HAPTICS_HMPG = 'haptics/hmpg';

        // Image Types
    case IMAGE_ACES = 'image/aces';
    case IMAGE_APNG = 'image/apng';
    case IMAGE_AVCI = 'image/avci';
    case IMAGE_AVCS = 'image/avcs';
    case IMAGE_AVIF = 'image/avif';
    case IMAGE_BMP = 'image/bmp';
    case IMAGE_CGM = 'image/cgm';
    case IMAGE_DICOM_RLE = 'image/dicom-rle';
    case IMAGE_DPX = 'image/dpx';
    case IMAGE_EMF = 'image/emf';
    case IMAGE_EXAMPLE = 'image/example';
    case IMAGE_FITS = 'image/fits';
    case IMAGE_G3FAX = 'image/g3fax';
    case IMAGE_GIF = 'image/gif';
    case IMAGE_HEIC = 'image/heic';
    case IMAGE_HEIC_SEQUENCE = 'image/heic-sequence';
    case IMAGE_HEIF = 'image/heif';
    case IMAGE_HEIF_SEQUENCE = 'image/heif-sequence';
    case IMAGE_HEJ2K = 'image/hej2k';
    case IMAGE_HSJ2 = 'image/hsj2';
    case IMAGE_IEF = 'image/ief';
    case IMAGE_J2C = 'image/j2c';
    case IMAGE_JLS = 'image/jls';
    case IMAGE_JP2 = 'image/jp2';
    case IMAGE_JPEG = 'image/jpeg';
    case IMAGE_JPH = 'image/jph';
    case IMAGE_JPHC = 'image/jphc';
    case IMAGE_JPM = 'image/jpm';
    case IMAGE_JPX = 'image/jpx';
    case IMAGE_JXL = 'image/jxl';
    case IMAGE_JXR = 'image/jxr';
    case IMAGE_JXRA = 'image/jxrA';
    case IMAGE_JXRS = 'image/jxrS';
    case IMAGE_JXS = 'image/jxs';
    case IMAGE_JXSC = 'image/jxsc';
    case IMAGE_JXSI = 'image/jxsi';
    case IMAGE_JXSS = 'image/jxss';
    case IMAGE_KTX = 'image/ktx';
    case IMAGE_KTX2 = 'image/ktx2';
    case IMAGE_NAPLPS = 'image/naplps';
    case IMAGE_PNG = 'image/png';
    case IMAGE_PRS_BTIF = 'image/prs.btif';
    case IMAGE_PRS_PTI = 'image/prs.pti';
    case IMAGE_PWG_RASTER = 'image/pwg-raster';
    case IMAGE_SVG_XML = 'image/svg+xml';
    case IMAGE_T38 = 'image/t38';
    case IMAGE_TIFF = 'image/tiff';
    case IMAGE_TIFF_FX = 'image/tiff-fx';
    case IMAGE_VND_ADOBE_PHOTOSHOP = 'image/vnd.adobe.photoshop';
    case IMAGE_VND_AIRZIP_ACCELERATOR_AZV = 'image/vnd.airzip.accelerator.azv';
    case IMAGE_VND_CNS_INF2 = 'image/vnd.cns.inf2';
    case IMAGE_VND_DECE_GRAPHIC = 'image/vnd.dece.graphic';
    case IMAGE_VND_DJVU = 'image/vnd.djvu';
    case IMAGE_VND_DWG = 'image/vnd.dwg';
    case IMAGE_VND_DXF = 'image/vnd.dxf';
    case IMAGE_VND_DVB_SUBTITLE = 'image/vnd.dvb.subtitle';
    case IMAGE_VND_FASTBIDSHEET = 'image/vnd.fastbidsheet';
    case IMAGE_VND_FPX = 'image/vnd.fpx';
    case IMAGE_VND_FST = 'image/vnd.fst';
    case IMAGE_VND_FUJIXEROX_EDMICS_MMR = 'image/vnd.fujixerox.edmics-mmr';
    case IMAGE_VND_FUJIXEROX_EDMICS_RLC = 'image/vnd.fujixerox.edmics-rlc';
    case IMAGE_VND_GLOBALGRAPHICS_PGB = 'image/vnd.globalgraphics.pgb';
    case IMAGE_VND_MICROSOFT_ICON = 'image/vnd.microsoft.icon';
    case IMAGE_VND_MIX = 'image/vnd.mix';
    case IMAGE_VND_MS_MODI = 'image/vnd.ms-modi';
    case IMAGE_VND_MOZILLA_APNG = 'image/vnd.mozilla.apng';
    case IMAGE_VND_NET_FPX = 'image/vnd.net-fpx';
    case IMAGE_VND_PCO_B16 = 'image/vnd.pco.b16';
    case IMAGE_VND_RADIANCE = 'image/vnd.radiance';
    case IMAGE_VND_SEALED_PNG = 'image/vnd.sealed.png';
    case IMAGE_VND_SEALEDMEDIA_SOFTSEAL_GIF = 'image/vnd.sealedmedia.softseal.gif';
    case IMAGE_VND_SEALEDMEDIA_SOFTSEAL_JPG = 'image/vnd.sealedmedia.softseal.jpg';
    case IMAGE_VND_SVF = 'image/vnd.svf';
    case IMAGE_VND_TENCENT_TAP = 'image/vnd.tencent.tap';
    case IMAGE_VND_VALVE_SOURCE_TEXTURE = 'image/vnd.valve.source.texture';
    case IMAGE_VND_WAP_WBMP = 'image/vnd.wap.wbmp';
    case IMAGE_VND_XIFF = 'image/vnd.xiff';
    case IMAGE_VND_ZBRUSH_PCX = 'image/vnd.zbrush.pcx';
    case IMAGE_WEBP = 'image/webp';
    case IMAGE_WMF = 'image/wmf';
    case IMAGE_X_EMF = 'image/x-emf';
    case IMAGE_X_WMF = 'image/x-wmf';

        // Message Types
    case MESSAGE_BHTTP = 'message/bhttp';
    case MESSAGE_CPIM = 'message/CPIM';
    case MESSAGE_DELIVERY_STATUS = 'message/delivery-status';
    case MESSAGE_DISPOSITION_NOTIFICATION = 'message/disposition-notification';
    case MESSAGE_EXAMPLE = 'message/example';
    case MESSAGE_EXTERNAL_BODY = 'message/external-body';
    case MESSAGE_FEEDBACK_REPORT = 'message/feedback-report';
    case MESSAGE_GLOBAL = 'message/global';
    case MESSAGE_GLOBAL_DELIVERY_STATUS = 'message/global-delivery-status';
    case MESSAGE_GLOBAL_DISPOSITION_NOTIFICATION = 'message/global-disposition-notification';
    case MESSAGE_GLOBAL_HEADERS = 'message/global-headers';
    case MESSAGE_HTTP = 'message/http';
    case MESSAGE_IMDN_XML = 'message/imdn+xml';
    case MESSAGE_MLS = 'message/mls';
    case MESSAGE_NEWS = 'message/news';
    case MESSAGE_OHTTP_REQ = 'message/ohttp-req';
    case MESSAGE_OHTTP_RES = 'message/ohttp-res';
    case MESSAGE_PARTIAL = 'message/partial';
    case MESSAGE_RFC822 = 'message/rfc822';
    case MESSAGE_S_HTTP = 'message/s-http';
    case MESSAGE_SIP = 'message/sip';
    case MESSAGE_SIPFRAG = 'message/sipfrag';
    case MESSAGE_TRACKING_STATUS = 'message/tracking-status';
    case MESSAGE_VND_SI_SIMP = 'message/vnd.si.simp';
    case MESSAGE_VND_WFA_WSC = 'message/vnd.wfa.wsc';

        // Model Types
    case MODEL_3MF = 'model/3mf';
    case MODEL_E57 = 'model/e57';
    case MODEL_EXAMPLE = 'model/example';
    case MODEL_GLTF_BINARY = 'model/gltf-binary';
    case MODEL_GLTF_JSON = 'model/gltf+json';
    case MODEL_JT = 'model/JT';
    case MODEL_IGES = 'model/iges';
    case MODEL_MESH = 'model/mesh';
    case MODEL_MTL = 'model/mtl';
    case MODEL_OBJ = 'model/obj';
    case MODEL_PRC = 'model/prc';
    case MODEL_STEP = 'model/step';
    case MODEL_STEP_XML = 'model/step+xml';
    case MODEL_STEP_ZIP = 'model/step+zip';
    case MODEL_STEP_XML_ZIP = 'model/step-xml+zip';
    case MODEL_STL = 'model/stl';
    case MODEL_U3D = 'model/u3d';
    case MODEL_VND_BARY = 'model/vnd.bary';
    case MODEL_VND_CLD = 'model/vnd.cld';
    case MODEL_VND_COLLADA_XML = 'model/vnd.collada+xml';
    case MODEL_VND_DWF = 'model/vnd.dwf';
    case MODEL_VND_FLATLAND_3DML = 'model/vnd.flatland.3dml';
    case MODEL_VND_GDL = 'model/vnd.gdl';
    case MODEL_VND_GS_GDL = 'model/vnd.gs-gdl';
    case MODEL_VND_GTW = 'model/vnd.gtw';
    case MODEL_VND_MOML_XML = 'model/vnd.moml+xml';
    case MODEL_VND_MTS = 'model/vnd.mts';
    case MODEL_VND_OPENGEX = 'model/vnd.opengex';
    case MODEL_VND_PARASOLID_TRANSMIT_BINARY = 'model/vnd.parasolid.transmit.binary';
    case MODEL_VND_PARASOLID_TRANSMIT_TEXT = 'model/vnd.parasolid.transmit.text';
    case MODEL_VND_PYTHA_PYOX = 'model/vnd.pytha.pyox';
    case MODEL_VND_ROSETTE_ANNOTATED_DATA_MODEL = 'model/vnd.rosette.annotated-data-model';
    case MODEL_VND_SAP_VDS = 'model/vnd.sap.vds';
    case MODEL_VND_USDA = 'model/vnd.usda';
    case MODEL_VND_USDZ_ZIP = 'model/vnd.usdz+zip';
    case MODEL_VND_VALVE_SOURCE_COMPILED_MAP = 'model/vnd.valve.source.compiled-map';
    case MODEL_VND_VTU = 'model/vnd.vtu';
    case MODEL_VRML = 'model/vrml';
    case MODEL_X3D_VRML = 'model/x3d-vrml';
    case MODEL_X3D_FASTINFOSET = 'model/x3d+fastinfoset';
    case MODEL_X3D_XML = 'model/x3d+xml';

        // Multipart Types
    case MULTIPART_ALTERNATIVE = 'multipart/alternative';
    case MULTIPART_APPLEDOUBLE = 'multipart/appledouble';
    case MULTIPART_BYTERANGES = 'multipart/byteranges';
    case MULTIPART_DIGEST = 'multipart/digest';
    case MULTIPART_ENCRYPTED = 'multipart/encrypted';
    case MULTIPART_EXAMPLE = 'multipart/example';
    case MULTIPART_FORM_DATA = 'multipart/form-data';
    case MULTIPART_HEADER_SET = 'multipart/header-set';
    case MULTIPART_MIXED = 'multipart/mixed';
    case MULTIPART_MULTILINGUAL = 'multipart/multilingual';
    case MULTIPART_PARALLEL = 'multipart/parallel';
    case MULTIPART_RELATED = 'multipart/related';
    case MULTIPART_REPORT = 'multipart/report';
    case MULTIPART_SIGNED = 'multipart/signed';
    case MULTIPART_VND_BINT_MED_PLUS = 'multipart/vnd.bint.med-plus';
    case MULTIPART_VOICE_MESSAGE = 'multipart/voice-message';
    case MULTIPART_X_MIXED_REPLACE = 'multipart/x-mixed-replace';

        // Text Types
    case TEXT_1D_INTERLEAVED_PARITYFEC = 'text/1d-interleaved-parityfec';
    case TEXT_CACHE_MANIFEST = 'text/cache-manifest';
    case TEXT_CALENDAR = 'text/calendar';
    case TEXT_CQL = 'text/cql';
    case TEXT_CQL_EXPRESSION = 'text/cql-expression';
    case TEXT_CQL_IDENTIFIER = 'text/cql-identifier';
    case TEXT_CSS = 'text/css';
    case TEXT_CSV = 'text/csv';
    case TEXT_CSV_SCHEMA = 'text/csv-schema';
    case TEXT_DIRECTORY = 'text/directory';
    case TEXT_DNS = 'text/dns';
    case TEXT_ECMASCRIPT = 'text/ecmascript';
    case TEXT_ENCAPRTP = 'text/encaprtp';
    case TEXT_ENRICHED = 'text/enriched';
    case TEXT_EXAMPLE = 'text/example';
    case TEXT_FHIRPATH = 'text/fhirpath';
    case TEXT_FLEXFEC = 'text/flexfec';
    case TEXT_FWDRED = 'text/fwdred';
    case TEXT_GFF3 = 'text/gff3';
    case TEXT_GRAMMAR_REF_LIST = 'text/grammar-ref-list';
    case TEXT_HL7V2 = 'text/hl7v2';
    case TEXT_HTML = 'text/html';
    case TEXT_JAVASCRIPT = 'text/javascript';
    case TEXT_JCR_CND = 'text/jcr-cnd';
    case TEXT_MARKDOWN = 'text/markdown';
    case TEXT_MIZAR = 'text/mizar';
    case TEXT_N3 = 'text/n3';
    case TEXT_PARAMETERS = 'text/parameters';
    case TEXT_PARITYFEC = 'text/parityfec';
    case TEXT_PLAIN = 'text/plain';
    case TEXT_PROVENANCE_NOTATION = 'text/provenance-notation';
    case TEXT_PRS_FALLENSTEIN_RST = 'text/prs.fallenstein.rst';
    case TEXT_PRS_LINES_TAG = 'text/prs.lines.tag';
    case TEXT_PRS_PROP_LOGIC = 'text/prs.prop.logic';
    case TEXT_PRS_TEXI = 'text/prs.texi';
    case TEXT_RAPTORFEC = 'text/raptorfec';
    case TEXT_RED = 'text/RED';
    case TEXT_RFC822_HEADERS = 'text/rfc822-headers';
    case TEXT_RICHTEXT = 'text/richtext';
    case TEXT_RTF = 'text/rtf';
    case TEXT_RTP_ENC_AESCM128 = 'text/rtp-enc-aescm128';
    case TEXT_RTPLOOPBACK = 'text/rtploopback';
    case TEXT_RTX = 'text/rtx';
    case TEXT_SGML = 'text/SGML';
    case TEXT_SHACLC = 'text/shaclc';
    case TEXT_SHEX = 'text/shex';
    case TEXT_SPDX = 'text/spdx';
    case TEXT_STRINGS = 'text/strings';
    case TEXT_T140 = 'text/t140';
    case TEXT_TAB_SEPARATED_VALUES = 'text/tab-separated-values';
    case TEXT_TROFF = 'text/troff';
    case TEXT_TURTLE = 'text/turtle';
    case TEXT_ULPFEC = 'text/ulpfec';
    case TEXT_URI_LIST = 'text/uri-list';
    case TEXT_VCARD = 'text/vcard';
    case TEXT_VND_A = 'text/vnd.a';
    case TEXT_VND_ABC = 'text/vnd.abc';
    case TEXT_VND_ASCII_ART = 'text/vnd.ascii-art';
    case TEXT_VND_CURL = 'text/vnd.curl';
    case TEXT_VND_DEBIAN_COPYRIGHT = 'text/vnd.debian.copyright';
    case TEXT_VND_DMCLIENTSCRIPT = 'text/vnd.DMClientScript';
    case TEXT_VND_DVB_SUBTITLE = 'text/vnd.dvb.subtitle';
    case TEXT_VND_ESMERTEC_THEME_DESCRIPTOR = 'text/vnd.esmertec.theme-descriptor';
    case TEXT_VND_EXCHANGEABLE = 'text/vnd.exchangeable';
    case TEXT_VND_FAMILYSEARCH_GEDCOM = 'text/vnd.familysearch.gedcom';
    case TEXT_VND_FICLAB_FLT = 'text/vnd.ficlab.flt';
    case TEXT_VND_FLY = 'text/vnd.fly';
    case TEXT_VND_FMI_FLEXSTOR = 'text/vnd.fmi.flexstor';
    case TEXT_VND_GML = 'text/vnd.gml';
    case TEXT_VND_GRAPHVIZ = 'text/vnd.graphviz';
    case TEXT_VND_HANS = 'text/vnd.hans';
    case TEXT_VND_HGL = 'text/vnd.hgl';
    case TEXT_VND_IN3D_3DML = 'text/vnd.in3d.3dml';
    case TEXT_VND_IN3D_SPOT = 'text/vnd.in3d.spot';
    case TEXT_VND_IPTC_NEWSML = 'text/vnd.IPTC.NewsML';
    case TEXT_VND_IPTC_NITF = 'text/vnd.IPTC.NITF';
    case TEXT_VND_LATEX_Z = 'text/vnd.latex-z';
    case TEXT_VND_MOTOROLA_REFLEX = 'text/vnd.motorola.reflex';
    case TEXT_VND_MS_MEDIAPACKAGE = 'text/vnd.ms-mediapackage';
    case TEXT_VND_NET2PHONE_COMMCENTER_COMMAND = 'text/vnd.net2phone.commcenter.command';
    case TEXT_VND_RADISYS_MSML_BASIC_LAYOUT = 'text/vnd.radisys.msml-basic-layout';
    case TEXT_VND_SENX_WARPSCRIPT = 'text/vnd.senx.warpscript';
    case TEXT_VND_SI_URICATALOGUE = 'text/vnd.si.uricatalogue';
    case TEXT_VND_SUN_J2ME_APP_DESCRIPTOR = 'text/vnd.sun.j2me.app-descriptor';
    case TEXT_VND_SOSI = 'text/vnd.sosi';
    case TEXT_VND_TROLLTECH_LINGUIST = 'text/vnd.trolltech.linguist';
    case TEXT_VND_VCF = 'text/vnd.vcf';
    case TEXT_VND_WAP_SI = 'text/vnd.wap.si';
    case TEXT_VND_WAP_SL = 'text/vnd.wap.sl';
    case TEXT_VND_WAP_WML = 'text/vnd.wap.wml';
    case TEXT_VND_WAP_WMLSCRIPT = 'text/vnd.wap.wmlscript';
    case TEXT_VND_ZOO_KCL = 'text/vnd.zoo.kcl';
    case TEXT_VTT = 'text/vtt';
    case TEXT_WGSL = 'text/wgsl';
    case TEXT_XML = 'text/xml';
    case TEXT_XML_EXTERNAL_PARSED_ENTITY = 'text/xml-external-parsed-entity';

        // Video Types
    case VIDEO_1D_INTERLEAVED_PARITYFEC = 'video/1d-interleaved-parityfec';
    case VIDEO_3GPP = 'video/3gpp';
    case VIDEO_3GPP2 = 'video/3gpp2';
    case VIDEO_3GPP_TT = 'video/3gpp-tt';
    case VIDEO_AV1 = 'video/AV1';
    case VIDEO_BMPEG = 'video/BMPEG';
    case VIDEO_BT656 = 'video/BT656';
    case VIDEO_CELB = 'video/CelB';
    case VIDEO_DV = 'video/DV';
    case VIDEO_ENCAPRTP = 'video/encaprtp';
    case VIDEO_EVC = 'video/evc';
    case VIDEO_EXAMPLE = 'video/example';
    case VIDEO_FFV1 = 'video/FFV1';
    case VIDEO_FLEXFEC = 'video/flexfec';
    case VIDEO_H261 = 'video/H261';
    case VIDEO_H263 = 'video/H263';
    case VIDEO_H263_1998 = 'video/H263-1998';
    case VIDEO_H263_2000 = 'video/H263-2000';
    case VIDEO_H264 = 'video/H264';
    case VIDEO_H264_RCDO = 'video/H264-RCDO';
    case VIDEO_H264_SVC = 'video/H264-SVC';
    case VIDEO_H265 = 'video/H265';
    case VIDEO_H266 = 'video/H266';
    case VIDEO_ISO_SEGMENT = 'video/iso.segment';
    case VIDEO_JPEG = 'video/JPEG';
    case VIDEO_JPEG2000 = 'video/jpeg2000';
    case VIDEO_JXSV = 'video/jxsv';
    case VIDEO_MATROSKA = 'video/matroska';
    case VIDEO_MATROSKA_3D = 'video/matroska-3d';
    case VIDEO_MJ2 = 'video/mj2';
    case VIDEO_MP1S = 'video/MP1S';
    case VIDEO_MP2P = 'video/MP2P';
    case VIDEO_MP2T = 'video/MP2T';
    case VIDEO_MP4 = 'video/mp4';
    case VIDEO_MP4V_ES = 'video/MP4V-ES';
    case VIDEO_MPV = 'video/MPV';
    case VIDEO_MPEG = 'video/mpeg';
    case VIDEO_MPEG4_GENERIC = 'video/mpeg4-generic';
    case VIDEO_NV = 'video/nv';
    case VIDEO_OGG = 'video/ogg';
    case VIDEO_PARITYFEC = 'video/parityfec';
    case VIDEO_POINTER = 'video/pointer';
    case VIDEO_QUICKTIME = 'video/quicktime';
    case VIDEO_RAPTORFEC = 'video/raptorfec';
    case VIDEO_RAW = 'video/raw';
    case VIDEO_RTP_ENC_AESCM128 = 'video/rtp-enc-aescm128';
    case VIDEO_RTPLOOPBACK = 'video/rtploopback';
    case VIDEO_RTX = 'video/rtx';
    case VIDEO_SCIP = 'video/scip';
    case VIDEO_SMPTE291 = 'video/smpte291';
    case VIDEO_SMPTE292M = 'video/SMPTE292M';
    case VIDEO_ULPFEC = 'video/ulpfec';
    case VIDEO_VC1 = 'video/vc1';
    case VIDEO_VC2 = 'video/vc2';
    case VIDEO_VND_CCTV = 'video/vnd.CCTV';
    case VIDEO_VND_DECE_HD = 'video/vnd.dece.hd';
    case VIDEO_VND_DECE_MOBILE = 'video/vnd.dece.mobile';
    case VIDEO_VND_DECE_MP4 = 'video/vnd.dece.mp4';
    case VIDEO_VND_DECE_PD = 'video/vnd.dece.pd';
    case VIDEO_VND_DECE_SD = 'video/vnd.dece.sd';
    case VIDEO_VND_DECE_VIDEO = 'video/vnd.dece.video';
    case VIDEO_VND_DIRECTV_MPEG = 'video/vnd.directv.mpeg';
    case VIDEO_VND_DIRECTV_MPEG_TTS = 'video/vnd.directv.mpeg-tts';
    case VIDEO_VND_DLNA_MPEG_TTS = 'video/vnd.dlna.mpeg-tts';
    case VIDEO_VND_DVB_FILE = 'video/vnd.dvb.file';
    case VIDEO_VND_FVT = 'video/vnd.fvt';
    case VIDEO_VND_HNS_VIDEO = 'video/vnd.hns.video';
    case VIDEO_VND_IPTVFORUM_1DPARITYFEC_1010 = 'video/vnd.iptvforum.1dparityfec-1010';
    case VIDEO_VND_IPTVFORUM_1DPARITYFEC_2005 = 'video/vnd.iptvforum.1dparityfec-2005';
    case VIDEO_VND_IPTVFORUM_2DPARITYFEC_1010 = 'video/vnd.iptvforum.2dparityfec-1010';
    case VIDEO_VND_IPTVFORUM_2DPARITYFEC_2005 = 'video/vnd.iptvforum.2dparityfec-2005';
    case VIDEO_VND_IPTVFORUM_TTSAVC = 'video/vnd.iptvforum.ttsavc';
    case VIDEO_VND_IPTVFORUM_TTSMPEG2 = 'video/vnd.iptvforum.ttsmpeg2';
    case VIDEO_VND_MOTOROLA_VIDEO = 'video/vnd.motorola.video';
    case VIDEO_VND_MOTOROLA_VIDEOP = 'video/vnd.motorola.videop';
    case VIDEO_VND_MPEGURL = 'video/vnd.mpegurl';
    case VIDEO_VND_MS_PLAYREADY_MEDIA_PYV = 'video/vnd.ms-playready.media.pyv';
    case VIDEO_VND_NOKIA_INTERLEAVED_MULTIMEDIA = 'video/vnd.nokia.interleaved-multimedia';
    case VIDEO_VND_NOKIA_MP4VR = 'video/vnd.nokia.mp4vr';
    case VIDEO_VND_NOKIA_VIDEOVOIP = 'video/vnd.nokia.videovoip';
    case VIDEO_VND_OBJECTVIDEO = 'video/vnd.objectvideo';
    case VIDEO_VND_RADGAMETTOOLS_BINK = 'video/vnd.radgamettools.bink';
    case VIDEO_VND_RADGAMETTOOLS_SMACKER = 'video/vnd.radgamettools.smacker';
    case VIDEO_VND_SEALED_MPEG1 = 'video/vnd.sealed.mpeg1';
    case VIDEO_VND_SEALED_MPEG4 = 'video/vnd.sealed.mpeg4';
    case VIDEO_VND_SEALED_SWF = 'video/vnd.sealed.swf';
    case VIDEO_VND_SEALEDMEDIA_SOFTSEAL_MOV = 'video/vnd.sealedmedia.softseal.mov';
    case VIDEO_VND_UVVU_MP4 = 'video/vnd.uvvu.mp4';
    case VIDEO_VND_YOUTUBE_YT = 'video/vnd.youtube.yt';
    case VIDEO_VND_VIVO = 'video/vnd.vivo';
    case VIDEO_VP8 = 'video/VP8';
    case VIDEO_VP9 = 'video/VP9';

        // Other Types
    case APPLICATION_LINK_FORMAT = 'application/link-format';
    case APPLICATION_JSON_PATCH_JSON = 'application/json-patch+json';
}

class Router
{
    private $params = [];
    private $body = [];

    public $routes = [];

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
