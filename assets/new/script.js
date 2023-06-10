/* 
CSS Style sheet
Ver. 2.0
Print ready and CSS ready to optimize
Author: Nishant Dogra
Initial built: 04-01-2018
Updated: 16-02-2018
*/

(function (a) {
    a.fn.rtResponsiveTables = function (c) {
        var e = a.extend({
            containerBreakPoint: 0
        }, c);
        rtStartingOuterWidth = a(window).width();
        is_iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
        rt_responsive_table_object = this;

        function g(h) {
            return !a.trim(h.html())
        }

        function f(h) {
            rt_css_code = '<style type="text/css">';
            a(h).find("th").each(function (i, j) {
                rt_css_code += h + ".rt-vertical-table td:nth-of-type(" + (i + 1) + '):before { content: "' + a(this).text() + '"; }'
            });
            rt_css_code += "</style>";
            a(rt_css_code).appendTo("head")
        }

        function d(h) {
            rt_table_width = 0;
            if (h.hasClass("rt-vertical-table")) {
                rt_table_width = h.outerWidth()
            } else {
                h.find("th").each(function (i, j) {
                    rt_table_width += a(this).outerWidth()
                });
                rt_table_width = rt_table_width
            }
            return rt_table_width
        }

        function b() {
            if (a("table.rt-responsive-table").length) {
                a("table.rt-responsive-table").each(function (h) {
                    rt_containers_width = a(this).parent().width();
                    rt_current_width = d(a(this)) - 1;
                    rt_max_width = a(this).attr("data-rt-max-width");
                    rt_has_class_rt_vertical_table = a(this).hasClass("rt-vertical-table");
                    if (a(this).attr("data-rtContainerBreakPoint")) {
                        rt_user_defined_container_breakpoint = a(this).attr("data-rtContainerBreakPoint")
                    } else {
                        rt_user_defined_container_breakpoint = e.containerBreakPoint
                    } if (rt_containers_width < rt_current_width || rt_containers_width <= rt_user_defined_container_breakpoint) {
                        a(this).addClass("rt-vertical-table");
                        if (rt_max_width > rt_current_width && rt_max_width > rt_user_defined_container_breakpoint) {
                            a(this).attr("data-rt-max-width", rt_current_width)
                        } else {
                            if (rt_max_width > rt_current_width && rt_max_width <= rt_user_defined_container_breakpoint) {
                                a(this).attr("data-rt-max-width", rt_user_defined_container_breakpoint)
                            }
                        }
                    } else {
                        if (rt_containers_width > rt_max_width && rt_containers_width > rt_user_defined_container_breakpoint) {
                            a(this).removeClass("rt-vertical-table");
                            if ((rt_max_width > rt_current_width && !rt_has_class_rt_vertical_table) && (rt_max_width > rt_user_defined_container_breakpoint && !rt_has_class_rt_vertical_table)) {
                                a(this).attr("data-rt-max-width", rt_current_width)
                            } else {
                                if ((rt_max_width > rt_current_width && !rt_has_class_rt_vertical_table) && (rt_max_width <= rt_user_defined_container_breakpoint && !rt_has_class_rt_vertical_table)) {
                                    a(this).attr("data-rt-max-width", rt_user_defined_container_breakpoint)
                                }
                            }
                        } else { }
                    }
                })
            }
        }
        rt_responsive_table_object.each(function (h, i) {
            a(this).addClass("rt-responsive-table-" + h).addClass("rt-responsive-table");
            if (h == rt_responsive_table_object.length - 1) {
                a(window).resize(function () {
                    if (!is_iOS || (is_iOS && (rtStartingOuterWidth !== a(window).width()))) {
                        rtStartingOuterWidth = a(window).width();
                        b()
                    }
                });
                rt_responsive_table_count = a("table.rt-responsive-table").length;
                a("table.rt-responsive-table").each(function (k, j) {
                    f("table.rt-responsive-table-" + k);
                    a("table.rt-responsive-table-" + k).attr("data-rt-max-width", d(a(this)));
                    a(this).find("td,th").each(function (m, l) {
                        if (g(a(this))) {
                            a(this).html("&#160;")
                        }
                    });
                    if (rt_responsive_table_count - 1 == k) {
                        b()
                    }
                })
            }
        });
        return this
    }
}(jQuery));

$("table").rtResponsiveTables();