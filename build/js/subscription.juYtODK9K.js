/*! For license information please see subscription.juYtODK9K.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getHook(),n=PRHelper.getTool(),o=PRHelper.getSetting(),l=PRHelper.getRequest(),a=PRBackendHelper.getModal();t.bubbling("click",(t=>{let c=e.getTarget(t);e.setElementActivity(c),l.ajax(o.getOption("ajax.sync_data")).addNonce().onSuccess((e=>{a.show({content:e,type:"primary",onClose:()=>n.reload()})})).onError((e=>{a.show({content:e,type:"danger"})})).onFinally((()=>{e.setElementActivity(c,!0)})).send()}),".opt-sync-data")}();