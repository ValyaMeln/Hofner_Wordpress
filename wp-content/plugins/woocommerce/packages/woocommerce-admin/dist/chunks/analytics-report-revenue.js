(window.__wcAdmin_webpackJsonp=window.__wcAdmin_webpackJsonp||[]).push([[13],{484:function(e,t,r){"use strict";r.r(t),r.d(t,"default",(function(){return F}));var a=r(0),s=r(1),o=r.n(s),n=r(532),c=r(514),l=r(512),i=r(515),d=r(2),m=r(63),u=r(7),b=r(14),p=r(4),_=r(21),y=r(121),v=r(13),O=r(11),j=r(20),g=r(27),f=r(511),w=r(505);const h=[],R=["orders_count","gross_sales","total_sales","refunds","coupons","taxes","shipping","net_revenue"];class S extends a.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:Object(d.__)("Date",'woocommerce'),key:"date",required:!0,defaultSort:!0,isLeftAligned:!0,isSortable:!0},{label:Object(d.__)("Orders",'woocommerce'),key:"orders_count",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Gross sales",'woocommerce'),key:"gross_sales",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Returns",'woocommerce'),key:"refunds",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Coupons",'woocommerce'),key:"coupons",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Net sales",'woocommerce'),key:"net_revenue",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Taxes",'woocommerce'),key:"taxes",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Shipping",'woocommerce'),key:"shipping",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Total sales",'woocommerce'),key:"total_sales",required:!1,isSortable:!0,isNumeric:!0}]}getRowsContent(e=[]){const t=Object(v.f)("dateFormat",j.defaultTableDateFormat),{formatAmount:r,render:s,formatDecimal:o,getCurrencyConfig:n}=this.context;return e.map(e=>{const{coupons:c,gross_sales:l,total_sales:i,net_revenue:d,orders_count:u,refunds:b,shipping:p,taxes:v}=e.subtotals,O=Object(a.createElement)(_.Link,{href:"edit.php?post_type=shop_order&m="+Object(m.format)("Ymd",e.date_start),type:"wp-admin"},Object(y.formatValue)(n(),"number",u));return[{display:Object(a.createElement)(_.Date,{date:e.date_start,visibleFormat:t}),value:e.date_start},{display:O,value:Number(u)},{display:s(l),value:o(l)},{display:r(b),value:o(b)},{display:r(c),value:o(c)},{display:s(d),value:o(d)},{display:s(v),value:o(v)},{display:s(p),value:o(p)},{display:s(i),value:o(i)}]})}getSummary(e,t=0){const{orders_count:r=0,gross_sales:a=0,total_sales:s=0,refunds:o=0,coupons:n=0,taxes:c=0,shipping:l=0,net_revenue:i=0}=e,{formatAmount:m,getCurrencyConfig:u}=this.context,b=u();return[{label:Object(d._n)("day","days",t,'woocommerce'),value:Object(y.formatValue)(b,"number",t)},{label:Object(d._n)("order","orders",r,'woocommerce'),value:Object(y.formatValue)(b,"number",r)},{label:Object(d.__)("Gross sales",'woocommerce'),value:m(a)},{label:Object(d.__)("Returns",'woocommerce'),value:m(o)},{label:Object(d.__)("Coupons",'woocommerce'),value:m(n)},{label:Object(d.__)("Net sales",'woocommerce'),value:m(i)},{label:Object(d.__)("Taxes",'woocommerce'),value:m(c)},{label:Object(d.__)("Shipping",'woocommerce'),value:m(l)},{label:Object(d.__)("Total sales",'woocommerce'),value:m(s)}]}render(){const{advancedFilters:e,filters:t,tableData:r,query:s}=this.props;return Object(a.createElement)(f.a,{endpoint:"revenue",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,getSummary:this.getSummary,summaryFields:R,query:s,tableData:r,title:Object(d.__)("Revenue",'woocommerce'),columnPrefsKey:"revenue_report_columns",filters:t,advancedFilters:e})}}S.contextType=w.a;const T=Object(p.memoize)((e,t,r,a)=>({tableData:{items:{data:Object(p.get)(a,["data","intervals"],h),totalResults:Object(p.get)(a,["totalResults"],0)},isError:e,isRequesting:t,query:r}}),(e,t,r,a)=>[e,t,Object(g.stringify)(r),Object(p.get)(a,["totalResults"],0),Object(p.get)(a,["data","intervals"],h).length].join(":")),q=Object(p.memoize)((e,t,r,a,s)=>({interval:"day",orderby:t,order:e,page:r,per_page:a,after:Object(j.appendTimestamp)(s.primary.after,"start"),before:Object(j.appendTimestamp)(s.primary.before,"end")}),(e,t,r,a,s)=>[e,t,r,a,s.primary.after,s.primary.before].join(":"));var C=Object(b.compose)(Object(u.withSelect)((e,t)=>{const{query:r,filters:a,advancedFilters:s}=t,{woocommerce_default_date_range:o}=e(O.SETTINGS_STORE_NAME).getSetting("wc_admin","wcAdminSettings"),n=Object(j.getCurrentDates)(r,o),{getReportStats:c,getReportStatsError:l,isResolving:i}=e(O.REPORTS_STORE_NAME),d=q(r.order||"desc",r.orderby||"date",r.paged||1,r.per_page||O.QUERY_DEFAULTS.pageSize,n),m=Object(O.getReportTableQuery)({endpoint:"revenue",query:r,select:e,tableQuery:d,filters:a,advancedFilters:s}),u=c("revenue",m),b=Boolean(l("revenue",m)),p=i("getReportStats",["revenue",m]);return T(b,p,d,u)}))(S),k=r(510);class F extends a.Component{render(){const{path:e,query:t}=this.props;return Object(a.createElement)(a.Fragment,null,Object(a.createElement)(k.a,{query:t,path:e,report:"revenue",filters:n.c,advancedFilters:n.a}),Object(a.createElement)(i.a,{charts:n.b,endpoint:"revenue",query:t,selectedChart:Object(c.a)(t.chart,n.b),filters:n.c,advancedFilters:n.a}),Object(a.createElement)(l.a,{charts:n.b,endpoint:"revenue",path:e,query:t,selectedChart:Object(c.a)(t.chart,n.b),filters:n.c,advancedFilters:n.a}),Object(a.createElement)(C,{query:t,filters:n.c,advancedFilters:n.a}))}}F.propTypes={path:o.a.string.isRequired,query:o.a.object.isRequired}},532:function(e,t,r){"use strict";r.d(t,"b",(function(){return o})),r.d(t,"a",(function(){return n})),r.d(t,"c",(function(){return l}));var a=r(2),s=r(31);const o=Object(s.applyFilters)("woocommerce_admin_revenue_report_charts",[{key:"gross_sales",label:Object(a.__)("Gross sales",'woocommerce'),order:"desc",orderby:"gross_sales",type:"currency",isReverseTrend:!1},{key:"refunds",label:Object(a.__)("Returns",'woocommerce'),order:"desc",orderby:"refunds",type:"currency",isReverseTrend:!0},{key:"coupons",label:Object(a.__)("Coupons",'woocommerce'),order:"desc",orderby:"coupons",type:"currency",isReverseTrend:!1},{key:"net_revenue",label:Object(a.__)("Net sales",'woocommerce'),orderby:"net_revenue",type:"currency",isReverseTrend:!1},{key:"taxes",label:Object(a.__)("Taxes",'woocommerce'),order:"desc",orderby:"taxes",type:"currency",isReverseTrend:!1},{key:"shipping",label:Object(a.__)("Shipping",'woocommerce'),orderby:"shipping",type:"currency",isReverseTrend:!1},{key:"total_sales",label:Object(a.__)("Total sales",'woocommerce'),order:"desc",orderby:"total_sales",type:"currency",isReverseTrend:!1}]),n=Object(s.applyFilters)("woocommerce_admin_revenue_report_advanced_filters",{filters:{},title:Object(a._x)("Revenue Matches {{select /}} Filters","A sentence describing filters for Revenue. See screen shot for context: https://cloudup.com/cSsUY9VeCVJ",'woocommerce')}),c=[];Object.keys(n.filters).length&&(c.push({label:Object(a.__)("All Revenue",'woocommerce'),value:"all"}),c.push({label:Object(a.__)("Advanced Filters",'woocommerce'),value:"advanced"}));const l=Object(s.applyFilters)("woocommerce_admin_revenue_report_filters",[{label:Object(a.__)("Show",'woocommerce'),staticParams:["chartType","paged","per_page"],param:"filter",showFilters:()=>c.length>0,filters:c}])}}]);