<!--信息填写首表 order tab 0-->
<div class="orderTab">
    <label>联系方式(选择其一即可)</label><br>
    <p><input placeholder="邮箱：1234@example.com" type="email" name="email"></p>
    <p><input placeholder="移动电话：" type="text" name="mobile"></p>
    <label for="description">测算类型:</label><br>
    <div style="display: inherit">
        <button type="button"  value="work" onclick="service('work')">事业/工作</button>
        <button type="button"  value="study" onclick="service('study')">学业</button>
        <button type="button"  value="marriage" onclick="service('marriage')">婚姻</button>
        <button type="button"  value="naming" onclick="service('naming')">起名</button>
    </div>
</div>
<!--第二步-->

<!--学业表-->
<div class="orderTab">
    <br><label>学业预测</label><br>
    <p>出生日期(实际的)<input type="date" id="datepicker" name="DOB" required></p>
    <P>你/他(她)的实际性别:<br>
        <label for="man">男</label><input type="radio" name="gender" id="man" value="true">
        <label for="man">女</label><input type="radio" name="gender" id="woman" value="false">
    </P>
    <p>目前您的地理位置(实际的)</p><input type="text" name="position" required></p>
    <p>请选一个数字:</p>
    <p>
        <input type="radio" id="1" name="yao" value="1" >
        <label for="1">1</label>
        <input type="radio" id="2" name="yao" value="2">
        <label for="2">2</label>
        <input type="radio" id="3" name="yao" value="3">
        <label for="3">3</label>
        <input type="radio" id="4" name="yao" value="4">
        <label for="4">4</label>
        <input type="radio" id="5" name="yao" value="5">
        <label for="5">5</label>
        <input type="radio" id="6" name="yao" value="6">
        <label for="6">6</label>
    </p>
    <p>
        <input type="text" name="question" placeholder="我未来学历更进一步. 我适不适合去xxx学校, 它位于我家的东/北xxx方位上.">
    </p>
</div>
<!--婚姻表-->
<div class="orderTab">
    <br><label>婚姻预测</label><br>
    <p>是否男女双方同问: <br>
        <label for="couple">双方同问</label><input type="radio" id="couple" value="false" name="single" onclick="setSingle(2)" required>
        <label for="single">仅自己</label><input type="radio" id="single" value="true" name="single" onclick="setSingle(1)">
    </p>
    <P>你的实际性别:<br>
        <label for="man">男</label><input type="radio" name="gender" id="man" value="true" onclick="setGender(1)">
        <label for="man">女</label><input type="radio" name="gender" id="woman" value="false" onclick="setGender(2)">
    </P>
    <p>男方出生日期(实际的)<input type="date" id="datepicker" name="DOB_M"  required></p>
    <p>女方出生日期(实际的)<input type="date" id="datepicker" name="DOB_W"  required></p>
    <p>请选一个数字:</p>
    <p>
        <input type="radio" id="1" name="yao" value="1" >
        <label for="1">1</label>
        <input type="radio" id="2" name="yao" value="2">
        <label for="2">2</label>
        <input type="radio" id="3" name="yao" value="3">
        <label for="3">3</label>
        <input type="radio" id="4" name="yao" value="4">
        <label for="4">4</label>
        <input type="radio" id="5" name="yao" value="5">
        <label for="5">5</label>
        <input type="radio" id="6" name="yao" value="6">
        <label for="6">6</label>
    </p>
    <br>
    <p>问题描述:</p>
    <p>
        <input type="text" name="question" placeholder="我未来婚姻状况怎么样? ; 我和目前的对象命局是否匹配? ;  我们准备要结婚了, 在什么时间下婚书, 结婚合适?">
    </p>
</div>
<!--取名表-->
<div class="orderTab">
    <br><label>起/改名字</label><br>
    <p>起/改名字的对象:
        <select name="person" required>
            <option value="me">自己</option>
            <option value="child">孩子</option>
            <option value="it">别人</option>
        </select>
    </p>
    <p>出生日期(实际的)<input type="date" id="datepicker" name="DOB"></p>

    <P>你/他(她)的实际性别:<br>
        <label for="man">男</label><input type="radio" name="gender" id="man" value="true" >
        <label for="man">女</label><input type="radio" name="gender" id="woman" value="false">
    </P>
    <p>姓氏</p><input type="text" id="surname" name="surname" required></p>
    <br>
    <p>命名要求:</p>
    <p>
        <input type="text" name="question" placeholder="想/不想 让用哪些字或者哪些音:">
    </p>
</div>
<!--第三步-->
<!--付款页索引-->
<div class="orderTab">
    <label for="channel">交易方式：</label><br>
    <p style="display: inline">

        <input type="button" name="channel" id="alipay" value="支付宝">

        <input type="button" name="channel" id="wechat" value="微信">

        <input type="button" name="channel" id="visa" value="Visa信用卡">
    </p><br><br>
</div>

<!--前后步导航栏-->
<div style="overflow:auto;">
    <div style="float:right; display: flex;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
</div>
