simple-php-webhook-for-github
=============================

###简单PHP版本的webhook###
**********
#####1.功能介绍#####
如果你使用过svn的钩子就应该明白github的webhook的功能了。<br>
当你在向服务器执行git push（或者其他更多操作的时候，这个可以在github源控制面板里设置。需要在什么事件的时候触发哪个一个钩子，都是可以设置的）。

#####2.使用方法#####
参考 <https://github.com/blog/1778-webhooks-level-up><br>
>1. 将hook.php放到您的服务器上,保证通过外网可以访问到。<br>
>2. 在服务器上安装git。`git --version`查看是否有安装git，如果没有安装，通过`yum install git`即可。<br>
>3. 点击进入某个项目的控制面板（settings），然后在（webhooks）里面添加这个脚本的url地址。<br>

以上步骤操作完毕之后，就可以通过本地push代码到github上，然后通过控制面板的触发记录来查看返回的信息,以便于做相应的调试。
这中间可能会有遇到一些权限问题，请根据返回的信息及时调整。
把所有文件都往nginx或者apache的用户权限上调整吧。 `chown -R www:www xxx`

#####3.功能扩充#####
如果上面使用的三部走通之后，也就是你开始自己在钩子里扩展使用github提供的webhook的API来记录日志了。<br>当然是有必要的话。
