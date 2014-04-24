/**
 * 滚动滚动条滚到某个位时去自动把某个函数或再解析对应的HTML,如把html写在<textarea></textarea>里面
 * @module asyncScrollLoader
 */

YUI.add('asyncScrollLoader', function(Y){
    var asyncScrollLoader = function(config){
        asyncScrollLoader.superclass.constructor.apply(this, arguments);
    };
    asyncScrollLoader.NAME = 'asyncscrollloader';
    asyncScrollLoader.ATTRS = {};
    Y.extend(asyncScrollLoader, Y.Widget, {
        /**
         * 初始化函�?
         * @param {Object} config 可配置属性，有下面属�?
         * elementName {string} HTML标签名称，一般是textarea
         * className {string} 样式名称
         * contentAttribute  {string} 获取该元素值的属性名称，一般是value
         * foldDistance  {number} 当前元素和触发加载点的距离到达该值时触发，默认为20
         * obCallback  异步事件被触发时的回调函�? object 包括下列属性： 
         * funName  {string} 回调函数�?
         * argument {Array} 回调的函数参数列�?
         * context  {object} 函数执行上下文对�?
         */
        initializer: function(config){
            //存放延迟加载HTML内容的标签名称， 这里应该是textarea  
            this.delayLoadElementName = config.elementName;           
            //标签的class  
            this.delayLoadClass = config.className;
            //存放延迟加载HTML内容的标签属性，这里应该是value  
            this.contentAttribute = config.contentAttribute || "";
            //当前元素和触发加载点的距�?
            this.foldDistance =  config.foldDistance || 20;
            //回调函数
            this.obCallBack = config.obCallback || {}; 
        },
        /**
         * 绑定滚动条事�?
         */
        bindUI: function(){
            var self = this;
            //定义当页面滚动时，检测需要加载的位置  
            Y.on('scroll', function(ev){
                self._delayLoader();
            });
            Y.on('resize', function(ev){
                self._delayLoader();
            });
        },
        /**
         * 渲染界面
         */
        
        renderUI: function(){           
            this._delayLoader(true);
        },
        /**
         * 获得未加载的下一个节�?
         */
        _getNextNode: function(){   
            var selector = this.delayLoadElementName + '.' + this.delayLoadClass;
            var node = Y.one(selector);
            return node;
        },
        /**
         * 
         * @param {Object} isPageInitScroll  当组件渲染UI时，是否需要检测浏览器刷新时记录滚动位�?
         */
        _delayLoader: function(isPageInitScroll){
            //当前窗口高度  
            var viewportHeight = Y.DOM.winHeight();
            //当前的垂直滚动位�? 
            var scrollHeight = Y.DOM.docScrollY();
            //当前的视窗最下面的垂直坐�?   
            var viewbottom = viewportHeight + scrollHeight; 
            //当前元素的节�? 
            var currentNode = this._getNextNode();
            var foldDistance = this.foldDistance;
            
           //节点不存�? ，说明已经加载完�?   
            if (currentNode == null) {
                 //当所有节点都已加载完毕时，使自身为空函数�?
                this._delayLoader = function(){
                };                
                return;
            }
            
             
            if (viewbottom + foldDistance >= currentNode.get('region').top) { 
                //当前的视窗最下面的垂直坐标大于等于未加载的节点垂直位置时，加载内容�?  
                if('' != this.contentAttribute){
                    currentNode.get('parentNode').replaceChild(Y.Node.create(currentNode.get(this.contentAttribute)), currentNode);    
                }
                //判断是否指定了回调函�?
                var ob = this.obCallBack;
                if(ob.hasOwnProperty('funName')){
                    var funName = ob['funName'];
                    var arrPara = ob['argument'] || [];
                    var content = ob['context'] || window;
                    //开始执�?
                    funName.apply(content,arrPara);
                } 
            }
            else {
                return;
            }
            var self = this;
            //延迟100毫秒加载，避免多次检测DOM   
            if (isPageInitScroll) {
                setTimeout(function(){
                    self._delayLoader(true);
                }, 100);
            }
        }
        
    });
    Y.asyncScrollLoader = asyncScrollLoader;
}, '3.2.0', {
    requires: ['widget']
});