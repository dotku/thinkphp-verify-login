#thinkphp-verify-login
基于 ThinkPHP 3.2 的 Login 实例，使用 ThinkPHP 的验证码库

## 序言
我在这里<http://www.thinkphp.cn/code/749.html>看到了一位 TP 上的朋友共享的验证码的案例（我正在找案例，希望可以复制黏贴一下，完成我的一个小项目，没有找到太好的实例，就找到了这个），发现并不是太好用，所以就进行移植修改了一下。

希望有更多优质的 ThinkPHP 的 Code Snippet 分享出来

## 后序
官方的 OneThink 放在模块下的 PublicController 中的，不过相对来说更好的方案，应该参考 ThinkCMF 的，把验证码独立出来，放在 Api 模块下，供全局调用。