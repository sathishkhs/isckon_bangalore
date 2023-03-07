! function () {
    function e(e) {
        return e.replace(/<.[^<>]*?>/g, " ").replace(/&nbsp;|&#160;/gi, " ").replace(/[0-9.(),;:!?%#$'"_+=\/-]*/g, "")
    }
    jQuery.validator.addMethod("maxWords", (function (t, F, u) {
        return this.optional(F) || e(t).match(/\b\w+\b/g).length < u
    }), jQuery.validator.format("Please enter {0} words or less.")), jQuery.validator.addMethod("minWords", (function (t, F, u) {
        return this.optional(F) || e(t).match(/\b\w+\b/g).length >= u
    }), jQuery.validator.format("Please enter at least {0} words.")), jQuery.validator.addMethod("rangeWords", (function (t, F, u) {
        return this.optional(F) || e(t).match(/\b\w+\b/g).length >= u[0] && t.match(/bw+b/g).length < u[1]
    }), jQuery.validator.format("Please enter between {0} and {1} words."))
}(), jQuery.validator.addMethod("letterswithbasicpunc", (function (e, t) {
    return this.optional(t) || /^[a-z-.,()'\"\s]+$/i.test(e)
}), "Letters or punctuation only please"), jQuery.validator.addMethod("alphanumeric", (function (e, t) {
    return this.optional(t) || /^\w+$/i.test(e)
}), "Letters, numbers, spaces or underscores only please"), jQuery.validator.addMethod("lettersonly", (function (e, t) {
    return this.optional(t) || /^[a-zA-Z ]+$/i.test(e)
}), "Letters only please"), jQuery.validator.addMethod("nowhitespace", (function (e, t) {
    return this.optional(t) || /^\S+$/i.test(e)
}), "No white space please"), jQuery.validator.addMethod("password", (function (e, t) {
    return this.optional(t) || /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/i.test(e)
}), "Password should be <br> 1. At least one alphabet letter,<br> 2. One numeric letter, <br> 3. One special character"), jQuery.validator.addMethod("ziprange", (function (e, t) {
    return this.optional(t) || /^90[2-5]\d\{2}-\d{4}$/.test(e)
}), "Your ZIP-code must be in the range 902xx-xxxx to 905-xx-xxxx"), jQuery.validator.addMethod("integer", (function (e, t) {
    return this.optional(t) || /^-?\d+$/.test(e)
}), "A positive or negative non-decimal number please"), jQuery.validator.addMethod("pannumber", (function (e, t) {
    return this.optional(t) || /([A-Z]){5}([0-9]){4}([A-Z]){1}$/.test(e)
}), "Invalid Pan number. Please enter valid Pan number"), jQuery.validator.addMethod("vinUS", (function (e) {
    if (17 != e.length) return !1;
    var t, F, u, a, d, r, n = ["A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "P", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
        i = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 7, 9, 2, 3, 4, 5, 6, 7, 8, 9],
        o = [8, 7, 6, 5, 4, 3, 2, 10, 0, 9, 8, 7, 6, 5, 4, 3, 2],
        l = 0;
    for (t = 0; t < 17; t++) {
        if (a = o[t], u = e.slice(t, t + 1), 8 == t && (r = u), isNaN(u)) {
            for (F = 0; F < n.length; F++)
                if (u.toUpperCase() === n[F]) {
                    u = i[F], u *= a, isNaN(r) && 8 == F && (r = n[F]);
                    break
                }
        } else u *= a;
        l += u
    }
    return 10 == (d = l % 11) && (d = "X"), d == r
}), "The specified vehicle identification number (VIN) is invalid."), jQuery.validator.addMethod("dateITA", (function (e, t) {
    var F = !1;
    if (/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(e)) {
        var u = e.split("/"),
            a = parseInt(u[0], 10),
            d = parseInt(u[1], 10),
            r = parseInt(u[2], 10),
            n = new Date(r, d - 1, a);
        F = n.getFullYear() == r && n.getMonth() == d - 1 && n.getDate() == a
    } else F = !1;
    return this.optional(t) || F
}), "Please enter a correct date"), jQuery.validator.addMethod("dateNL", (function (e, t) {
    return this.optional(t) || /^\d\d?[\.\/-]\d\d?[\.\/-]\d\d\d?\d?$/.test(e)
}), "Vul hier een geldige datum in."), jQuery.validator.addMethod("time", (function (e, t) {
    return this.optional(t) || /^([01][0-9])|(2[0123]):([0-5])([0-9])$/.test(e)
}), "Please enter a valid time, between 00:00 and 23:59"), jQuery.validator.addMethod("phoneUS", (function (e, t) {
    return e = e.replace(/\s+/g, ""), this.optional(t) || e.length > 9 && e.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/)
}), "Please specify a valid phone number"), jQuery.validator.addMethod("phoneUK", (function (e, t) {
    return this.optional(t) || e.length > 9 && e.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/)
}), "Please specify a valid phone number"), jQuery.validator.addMethod("mobileUK", (function (e, t) {
    return this.optional(t) || e.length > 9 && e.match(/^((0|\+44)7(5|6|7|8|9){1}\d{2}\s?\d{6})$/)
}), "Please specify a valid mobile number"), jQuery.validator.addMethod("indianMobile", (function (e, t) {
    return this.optional(t) || e.length > 9 && e.match(/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/)
}), "Please specify a valid mobile number"), jQuery.validator.addMethod("strippedminlength", (function (e, t, F) {
    return jQuery(e).text().length >= F
}), jQuery.validator.format("Please enter at least {0} characters")), jQuery.validator.addMethod("email2", (function (e, t, F) {
    return this.optional(t) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(e)
}), jQuery.validator.messages.email), jQuery.validator.addMethod("url2", (function (e, t, F) {
    return this.optional(t) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)
}), jQuery.validator.messages.url), jQuery.validator.addMethod("creditcardtypes", (function (e, t, F) {
    if (/[^0-9-]+/.test(e)) return !1;
    e = e.replace(/\D/g, "");
    var u = 0;
    return F.mastercard && (u |= 1), F.visa && (u |= 2), F.amex && (u |= 4), F.dinersclub && (u |= 8), F.enroute && (u |= 16), F.discover && (u |= 32), F.jcb && (u |= 64), F.unknown && (u |= 128), F.all && (u = 255), 1 & u && /^(51|52|53|54|55)/.test(e) || 2 & u && /^(4)/.test(e) ? 16 == e.length : 4 & u && /^(34|37)/.test(e) ? 15 == e.length : 8 & u && /^(300|301|302|303|304|305|36|38)/.test(e) ? 14 == e.length : 16 & u && /^(2014|2149)/.test(e) ? 15 == e.length : 32 & u && /^(6011)/.test(e) || 64 & u && /^(3)/.test(e) ? 16 == e.length : 64 & u && /^(2131|1800)/.test(e) ? 15 == e.length : !!(128 & u)
}), "Please enter a valid credit card number.");