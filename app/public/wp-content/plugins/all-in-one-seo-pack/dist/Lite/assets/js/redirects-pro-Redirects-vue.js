(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["redirects-pro-Redirects-vue"],{"50e1":function(e,t,s){"use strict";s("dd0c")},dd0c:function(e,t,s){},f9ef:function(e,t,s){"use strict";s.r(t);var i=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"aioseo-redirects"},[s("core-card",{attrs:{slug:"addNewRedirection","header-text":e.strings.addNewRedirection}},[s("core-add-redirection",{attrs:{type:e.getDefaultRedirectType,query:e.getDefaultQueryParam,slash:e.options.redirectDefaults.ignoreSlash,case:e.options.redirectDefaults.ignoreCase,urls:e.getUrls,target:e.getTarget},on:{"added-redirect":e.refreshTable}})],1),s("base-wp-table",{key:e.wpTableKey,attrs:{filters:e.filters,totals:e.totals.main,columns:e.columns,rows:e.getRows,loading:e.wpTableLoading,"search-label":e.strings.searchUrls,"bulk-options":e.bulkOptions,"additional-filters":e.additionalFilters},on:{"filter-table":e.filterTable,"process-bulk-action":e.processBulkAction,"process-additional-filters":e.processAdditionalFilters,paginate:e.processPagination,search:e.processSearch},scopedSlots:e._u([{key:"source_url",fn:function(t){var i=t.row,r=t.index,n=t.column,o=t.editRow;return[s("strong",[s("a",{staticClass:"edit-link",attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),o(r)}}},[e._v(e._s(n))])]),s("div",{staticClass:"row-actions"},[s("span",{staticClass:"edit"},[s("a",{attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),o(r)}}},[e._v(e._s(e.strings.edit))]),e._v(" | ")]),i.regex?e._e():s("span",{staticClass:"test"},[s("a",{attrs:{href:e.$aioseo.urls.mainSiteUrl+n,target:"_blank"}},[e._v(e._s(e.strings.checkRedirect))]),e._v(" | ")]),s("span",{staticClass:"trash"},[s("a",{staticClass:"submitdelete",attrs:{href:"#"},on:{click:function(t){return t.preventDefault(),e.maybeDeleteRow(r)}}},[e._v(e._s(e.strings.delete))])])])]}},{key:"type",fn:function(t){var s=t.column;return[e._v(" "+e._s(e.getColumnLabel(s))+" ")]}},{key:"enabled",fn:function(t){var i=t.column,r=t.row;return[s("div",{staticStyle:{"text-align":"right"}},[s("base-toggle",{attrs:{value:i},on:{input:function(t){return e.toggleInput(r,i)}}})],1)]}},{key:"edit-row",fn:function(e){var t=e.row,i=e.editRow;return[s("core-add-redirection",{attrs:{edit:"",url:{id:t.id,url:t.source_url,regex:t.regex,ignoreSlash:t.ignore_slash,ignoreCase:t.ignore_case,showOptions:!0,errors:[],warnings:[]},target:t.target_url,type:t.type,query:t.query_param,rules:t.custom_rules},on:{cancel:function(e){return i(null)}}})]}},{key:"actions",fn:function(t){var i=t.row;return[i.custom_rules?s("span",[s("core-tooltip",{attrs:{type:"action"},scopedSlots:e._u([{key:"tooltip",fn:function(){return[e._v(" "+e._s(e.strings.rules)+" ")]},proxy:!0}],null,!0)},[s("svg-circle-information",{staticClass:"log-info",nativeOn:{click:function(t){return e.showCustomRuleInfo(i)}}})],1)],1):e._e()]}}])}),e.showDeleteModal?s("core-modal",{attrs:{"no-header":""},scopedSlots:e._u([{key:"body",fn:function(){return[s("div",{staticClass:"aioseo-modal-body"},[s("button",{staticClass:"close",on:{click:function(t){t.stopPropagation(),e.showDeleteModal=!1}}},[s("svg-close",{on:{click:function(t){e.showDeleteModal=!1}}})],1),s("h3",[e._v(e._s(e.areYouSureDeleteRedirect))]),s("div",{staticClass:"reset-description",domProps:{innerHTML:e._s(e.strings.actionCannotBeUndone)}}),s("base-button",{attrs:{type:"blue",size:"medium",loading:e.deletingRow},on:{click:e.processDeleteRow}},[e._v(" "+e._s(e.yesDeleteRedirect)+" ")]),s("base-button",{attrs:{type:"gray",size:"medium"},on:{click:function(t){e.showDeleteModal=!1}}},[e._v(" "+e._s(e.strings.noChangedMind)+" ")])],1)]},proxy:!0}],null,!1,1995483884)}):e._e(),e.customRuleInfo?s("core-modal",{on:{close:function(t){e.customRuleInfo=null}},scopedSlots:e._u([{key:"headerTitle",fn:function(){return[e._v(" "+e._s(e.strings.customRules)+" ")]},proxy:!0},{key:"body",fn:function(){return[s("div",{staticClass:"aioseo-modal-body info"},e._l(e.customRuleInfo,(function(t,i){return s("div",{key:i},[s("div",{staticClass:"rule"},[s("strong",[e._v(e._s(e.$constants.REDIRECTS_CUSTOM_RULES_LABELS[t.type])+":")]),e._v(" "+e._s("object"===typeof t.value||t.key?"":e.$constants.REDIRECTS_CUSTOM_RULES_LABELS[t.value]||t.value)+" "),e.isObject(t.value)?s("ul",e._l(t.value,(function(t,i){return s("li",{key:i},[e._v(e._s(e.$constants.REDIRECTS_CUSTOM_RULES_LABELS[t]||t)+" ")])})),0):e._e(),t.key?s("ul",[s("li",[s("strong",[e._v(e._s(t.key)+":")]),e._v(" "+e._s(t.value))])]):e._e()]),t.regex?s("div",{staticClass:"regex"},[s("base-toggle",{attrs:{value:t.regex,disabled:!0}},[e._v(" "+e._s(e.strings.regex)+" ")])],1):e._e()])})),0)]},proxy:!0}],null,!1,2264620160)}):e._e()],1)},r=[],n=s("53ca"),o=s("5530"),l=(s("c740"),s("99af"),s("d81d"),s("159b"),s("4de4"),s("ac1f"),s("841c"),s("7db0"),s("fb6a"),s("51da")),a=s("e762"),u=s("2f62"),c=s("9c0e"),d={mixins:[c["d"]],data:function(){return{queryUrls:[],deletingRow:!1,showDeleteModal:!1,shouldDeleteRow:null,wpTableKey:0,wpTableLoading:!1,strings:{addNewRedirection:this.$t.__("Add New Redirection",this.$td),searchUrls:this.$t.__("Search URLs",this.$td),edit:this.$t.__("Edit",this.$td),checkRedirect:this.$t.__("Check Redirect",this.$td),delete:this.$t.__("Delete",this.$td),areYouSureDeleteRedirect:this.$t.__("Are you sure you want to delete this redirect?",this.$td),areYouSureDeleteRedirects:this.$t.__("Are you sure you want to delete these redirects?",this.$td),actionCannotBeUndone:this.$t.__("This action cannot be undone.",this.$td),yesDeleteRedirect:this.$t.__("Yes, I want to delete this redirect",this.$td),yesDeleteRedirects:this.$t.__("Yes, I want to delete these redirects",this.$td),noChangedMind:this.$t.__("No, I changed my mind",this.$td),rules:this.$t.__("Rules",this.$td),customRules:this.$t.__("Custom Rules",this.$td),regex:this.$t.__("Regex",this.$td)},bulkOptions:[{label:this.$t.__("Enable",this.$td),value:"enable"},{label:this.$t.__("Disable",this.$td),value:"disable"},{label:this.$t.__("Reset Hits",this.$td),value:"reset-hits"},{label:this.$t.__("Delete",this.$td),value:"delete"}],customRuleInfo:null}},watch:{rows:{deep:!0,handler:function(){this.wpTableKey+=1}}},computed:Object(o["a"])(Object(o["a"])(Object(o["a"])({},Object(u["c"])("redirects",["rows","getCurrentFilter"])),Object(u["e"])("redirects",["filters","totals","options","selectedFilters"])),{},{areYouSureDeleteRedirect:function(){return Array.isArray(this.shouldDeleteRow)?this.strings.areYouSureDeleteRedirects:this.strings.areYouSureDeleteRedirect},yesDeleteRedirect:function(){return Array.isArray(this.shouldDeleteRow)?this.strings.yesDeleteRedirects:this.strings.yesDeleteRedirect},columns:function(){var e=[{slug:"source_url",label:this.$t.__("Source URL",this.$td)},{slug:"target_url",label:this.$t.__("Target URL",this.$td)},{slug:"hits",label:this.$t.__("Hits",this.$td),width:"97px"},{slug:"type",label:this.$t.__("Type",this.$td),width:"100px"},{slug:"group",label:this.$t.__("Group",this.$td),width:"150px"},{slug:"enabled",label:this.$constants.GLOBAL_STRINGS.enabled,width:"80px"},{slug:"actions",label:"",width:"40px"}];if("server"===this.options.main.method){var t=e.findIndex((function(e){return"hits"===e.slug}));-1!==t&&this.$delete(e,t)}return e},getDefaultRedirectType:function(){var e=this.getJsonValue(this.options.redirectDefaults.redirectType);return e||(e=this.$constants.REDIRECT_TYPES[0]),e.value},getDefaultQueryParam:function(){var e=this.getJsonValue(this.options.redirectDefaults.queryParam);return e||(e=this.$constants.REDIRECT_QUERY_PARAMS[0]),e.value},additionalFilters:function(){return[{label:this.$t.__("Filter by Group",this.$td),name:"group",options:[{label:this.$t.__("All Groups",this.$td),value:"all"}].concat(this.$constants.REDIRECT_GROUPS)}]},getRows:function(){return this.rows.map((function(e){return e.target_url=e.target_url||"-",e}))},getTarget:function(){return this.queryUrls.length?"/":""},getUrls:function(){var e=this;if(this.queryUrls.length)return this.queryUrls;var t=Object(l["a"])();if(void 0===t["aioseo-add-urls"])return[];var s="";try{s=JSON.parse(a["a"].decode(decodeURIComponent(t["aioseo-add-urls"])))}catch(i){}return s.forEach((function(t){e.queryUrls.push({id:t.id,url:decodeURIComponent(t.url),regex:!1,ignoreSlash:e.slash||!1,ignoreCase:e.case||!1,errors:[],warnings:[]})})),this.queryUrls}}),methods:Object(o["a"])(Object(o["a"])({},Object(u["b"])("redirects",["filter","bulk","paginate","search","delete"])),{},{filterTable:function(e){var t=this;this.wpTableLoading=!0,this.filter(e).then((function(){t.wpTableLoading=!1}))},refreshTable:function(){this.filterTable({slug:"all"})},toggleInput:function(e,t){var s=this;this.wpTableLoading=!0,this.bulk({action:t?"disable":"enable",rowIds:[e.id]}).then((function(){s.wpTableLoading=!1}))},processBulkAction:function(e){var t=this,s=e.action,i=e.selectedRows;if(i.length){if("delete"===s)return this.shouldDeleteRow=i,void(this.showDeleteModal=!0);this.wpTableLoading=!0,this.bulk({action:s,rowIds:i}).then((function(){t.wpTableLoading=!1}))}},processAdditionalFilters:function(e){var t=e.filters,s=this.getCurrentFilter||{slug:"all"};this.filterTable({slug:s.slug,additional:t})},processPagination:function(e,t){var s=this;this.wpTableLoading=!0;var i=t?"search":"paginate";this[i]({searchTerm:t,page:e,additional:this.selectedFilters}).then((function(){s.wpTableLoading=!1}))},processSearch:function(e){var t=this;this.wpTableLoading=!0,this.search({searchTerm:e,page:1}).then((function(){t.wpTableLoading=!1}))},getColumnLabel:function(e){return 0===e?this.$t.__("Pass through",this.$td):e},maybeDeleteRow:function(e){var t=this.rows.find((function(t,s){return s===e}));t&&(this.showDeleteModal=!0,this.shouldDeleteRow=t.id)},processDeleteRow:function(){var e=this;if(this.deletingRow=!0,Array.isArray(this.shouldDeleteRow))return this.bulk({action:"delete",rowIds:this.shouldDeleteRow}).then((function(){e.deletingRow=!1,e.showDeleteModal=!1,e.shouldDeleteRow=null,e.refreshTable()}));this.delete(this.shouldDeleteRow).then((function(){e.deletingRow=!1,e.showDeleteModal=!1,e.shouldDeleteRow=null,e.refreshTable()}))},showCustomRuleInfo:function(e){this.customRuleInfo=e.custom_rules.map((function(e){switch(e.type){case"role":e.value=e.value.map((function(e){return e.charAt(0).toUpperCase()+e.slice(1)}));break}return e}))},isObject:function(e){return"object"===Object(n["a"])(e)}})},h=d,f=(s("50e1"),s("2877")),_=Object(f["a"])(h,i,r,!1,null,null,null);t["default"]=_.exports}}]);