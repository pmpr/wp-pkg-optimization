/*! For license information please see dashboard.KTO34V2PX.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getHook(),r=PRHelper.getTool(),n=PRHelper.getRequest(),o=PRHelper.getSetting(),a=PRBackendHelper.getModal();function g(e,t={}){a.getCurrent().showSpinner(),n.ajax(o.getOption(`dashboard.ajax.${e}`)).onSuccess((e=>{r.reload()})).onError((e=>{a.getCurrent().showMessage(r.error2string(e))})).onFinally((()=>{a.getCurrent().hideSpinner()})).addNonce().send(t)}t.bubbling("click",(e=>{e.preventDefault(),e.preventDefault(),g("purge_all_cache")}),".pr-opt-purge-all-cache"),t.bubbling("click",(t=>{t.preventDefault(),g("change_dev_mode",{dev_mode:e.getData(e.getTarget(t,"button"),"dev-mode")})}),".pr-opt-change-dev-mode")}();