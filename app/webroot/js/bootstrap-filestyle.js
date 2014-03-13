/*
 * bootstrap-filestyle
 * http://dev.tudosobreweb.com.br/bootstrap-filestyle/
 *
 * Copyright (c) 2013 Markus Vinicius da Silva Lima
 * Version 1.0.3
 * Licensed under the MIT license.
 */
(function(c) {
    var b = function(d, e) {
        this.options = e;
        this.$elementFilestyle = [];
        this.$element = c(d)
    };
    b.prototype = {
        clear: function() {
            this.$element.val("");
            this.$elementFilestyle.find(":text").val("")
        },
        destroy: function() {
            this.$element.removeAttr("style").removeData("filestyle").val("");
            this.$elementFilestyle.remove()
        },
        icon: function(d) {
            if (d === true) {
                if (!this.options.icon) {
                    this.options.icon = true;
                    this.$elementFilestyle.find("label").prepend(this.htmlIcon())
                }
            } else {
                if (d === false) {
                    if (this.options.icon) {
                        this.options.icon = false;
                        this.$elementFilestyle.find("i").remove()
                    }
                } else {
                    return this.options.icon
                }
            }
        },
        input: function(d) {
            if (d === true) {
                if (!this.options.input) {
                    this.options.input = true;
                    this.$elementFilestyle.prepend(this.htmlInput());
                    var e = "",
                        g = [];
                    if (this.$element[0].files === undefined) {
                        g[0] = {
                            name: this.$element[0].value
                        }
                    } else {
                        g = this.$element[0].files
                    }
                    for (var f = 0; f < g.length; f++) {
                        e += g[f].name.split("\\").pop() + ", "
                    }
                    if (e !== "") {
                        this.$elementFilestyle.find(":text").val(e.replace(/\, $/g, ""))
                    }
                }
            } else {
                if (d === false) {
                    if (this.options.input) {
                        this.options.input = false;
                        this.$elementFilestyle.find(":text").remove()
                    }
                } else {
                    return this.options.input
                }
            }
        },
        buttonText: function(d) {
            if (d !== undefined) {
                this.options.buttonText = d;
                this.$elementFilestyle.find("label span").html(this.options.buttonText)
            } else {
                return this.options.buttonText
            }
        },
        classButton: function(d) {
            if (d !== undefined) {
                this.options.classButton = d;
                this.$elementFilestyle.find("label").attr({
                    "class": this.options.classButton
                });
                if (this.options.classButton.search(/btn-inverse|btn-primary|btn-danger|btn-warning|btn-success/i) !== -1) {
                    this.$elementFilestyle.find("label i").addClass("icon-white")
                } else {
                    this.$elementFilestyle.find("label i").removeClass("icon-white")
                }
            } else {
                return this.options.classButton
            }
        },
        classIcon: function(d) {
            if (d !== undefined) {
                this.options.classIcon = d;
                if (this.options.classButton.search(/btn-inverse|btn-primary|btn-danger|btn-warning|btn-success/i) !== -1) {
                    this.$elementFilestyle.find("label").find("i").attr({
                        "class": "icon-white " + this.options.classIcon
                    })
                } else {
                    this.$elementFilestyle.find("label").find("i").attr({
                        "class": this.options.classIcon
                    })
                }
            } else {
                return this.options.classIcon
            }
        },
        classInput: function(d) {
            if (d !== undefined) {
                this.options.classInput = d;
                this.$elementFilestyle.find(":text").addClass(this.options.classInput)
            } else {
                return this.options.classInput
            }
        },
        htmlIcon: function() {
            if (this.options.icon) {
                var d = "";
                if (this.options.classButton.search(/btn-inverse|btn-primary|btn-danger|btn-warning|btn-success/i) !== -1) {
                    d = " icon-white "
                }
                return '<i class="' + d + this.options.classIcon + '"></i> '
            } else {
                return ""
            }
        },
        htmlInput: function() {
            if (this.options.input) {
                return '<input type="text" class="' + this.options.classInput + '" disabled> '
            } else {
                return ""
            }
        },
        constructor: function() {
            var i = this,
                g = "",
                h = this.$element.attr("id"),
                d = [];
            if (h === "" || !h) {
                h = "filestyle-" + c(".bootstrap-filestyle").length;
                this.$element.attr({
                    id: h
                })
            }
            g = this.htmlInput() + '<label for="' + h + '" class="' + this.options.classButton + '">' + this.htmlIcon() + "<span>" + this.options.buttonText + "</span></label>";
            this.$elementFilestyle = c('<div class="bootstrap-filestyle" style="display: inline;">' + g + "</div>");
            var f = this.$elementFilestyle.find("label");
            var e = f.parent();
            e.attr("tabindex", "0").keypress(function(j) {
                if (j.keyCode === 13 || j.charCode === 32) {
                    f.click()
                }
            });
            this.$element.css({
                position: "absolute",
                left: "-9999px"
            }).attr("tabindex", "-1").after(this.$elementFilestyle);
            this.$element.change(function() {
                var j = "";
                if (this.files === undefined) {
                    d[0] = {
                        name: this.value
                    }
                } else {
                    d = this.files
                }
                for (var k = 0; k < d.length; k++) {
                    j += d[k].name.split("\\").pop() + ", "
                }
                if (j !== "") {
                    i.$elementFilestyle.find(":text").val(j.replace(/\, $/g, ""))
                }
            });
            if (window.navigator.userAgent.search(/firefox/i) > -1) {
                this.$elementFilestyle.find("label").click(function() {
                    i.$element.click();
                    return false
                })
            }
        }
    };
    var a = c.fn.filestyle;
    c.fn.filestyle = function(e, d) {
        var f = "",
            g = this.each(function() {
                if (c(this).attr("type") === "file") {
                    var j = c(this),
                        h = j.data("filestyle"),
                        i = c.extend({}, c.fn.filestyle.defaults, e, typeof e === "object" && e);
                    if (!h) {
                        j.data("filestyle", (h = new b(this, i)));
                        h.constructor()
                    }
                    if (typeof e === "string") {
                        f = h[e](d)
                    }
                }
            });
        if (typeof f !== undefined) {
            return f
        } else {
            return g
        }
    };
    c.fn.filestyle.defaults = {
        buttonText: "Choose file",
        input: true,
        icon: true,
        classButton: "btn",
        classInput: "input-large",
        classIcon: "icon-folder-open"
    };
    c.fn.filestyle.noConflict = function() {
        c.fn.filestyle = a;
        return this
    };
    c(".filestyle").each(function() {
        var e = c(this),
            d = {
                buttonText: e.attr("data-buttonText"),
                input: e.attr("data-input") === "false" ? false : true,
                icon: e.attr("data-icon") === "false" ? false : true,
                classButton: e.attr("data-classButton"),
                classInput: e.attr("data-classInput"),
                classIcon: e.attr("data-classIcon")
            };
        e.filestyle(d)
    })
})(window.jQuery);