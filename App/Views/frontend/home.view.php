        <div style="background-color:#171923" class="right col-12 col-md-9 ms-auto pb-5">
            <div style="background-color:#12141C" class="d-block d-md-none d-lg-none col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <img height="50" width="50" src="pulic/web/logo/nest.svg" alt="">
                        <a class="navbar-brand next-text-color" target="_blank" href="https://NestJS.com/">
                            NestJS
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <h2><a class="nav-link active" aria-current="page" href="#about">Quoi de neuf</a>
                                    </h2>
                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="#install">Installation</a></h2>

                                </li>
                                <li class="nav-item">
                                    <h2> <a class="nav-link" href="#base">Composant de base</a></h2>

                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="#tuto">Tuto</a></h2>

                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="#conclure">Fin</a></h2>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="content col-12 p-5">
                <div class="content col-12 text-end ">
                    <a class="text-secondary display-6" href="https://veille-sup.herokuapp.com/"><i class="fas fa-home"></i></a>
                </div>

                <div class="content col-12">
                    <div data-aos="fade-right" style="min-height: 100;" class="py-5" id="about">
                        <h1>QUOI DE NEUF </h1>
                        <h2 class="title py-4"> <span class="next-text-color">#</span> NestJS ?</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                NestJS est un framework backend, construit sur NodeJS et ExpressJS
                                pour cr??er des applications c??t?? serveur.
                            </p>
                            <div class="alert alert-primary d-flex align-items-center ms-4" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                                <div>
                                    Un framework est un ensemble d'outils et de composants ?? partir desquels on peut d??velopper des applications.
                                </div>
                            </div>
                            <p class="paragraph ms-4">

                                Il est le mieux adapt?? pour les API REST car il est tr??s rapide
                                d'obtenir une API REST ex??cut??e avec NestJS. <br> Il utilise du JavaScript moderne, est construit avec TypeScript
                                (pr??serve la compatibilit?? avec le JavaScript pur) et combine
                                des ??l??ments de POO (programmation orient??e objet),
                                FP (programmation fonctionnelle) et FRP
                                (programmation r??active fonctionnelle).
                                L'architecture du NestJS est principalement inspir??e d'AngularJS.
                            </p>
                        </div>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Les avantages</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                NestJS est fortement inspir?? d???Angular 2, ce qui induit de le consid??rer comme opini??tre et avec une forte extensibilit?? de son architecture.
                            </p>
                            <div class="alert alert-primary d-flex align-items-center ms-4" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                                <div>
                                    Angular est un framework JavaScript qui permet de cr??er des applications enti??res qui tournent dans une seule page HTML gr??ce au JavaScript.
                                </div>
                            </div>
                            <p class="paragraph ms-4">

                                Ce qui va permettre aux d??veloppeurs d???avoir une m??me conformit?? dans leur fa??on de coder en back-end (et possiblement d???avoir une ??quipe codant de bout en bout des applications en TypeScript).
                                Il est structur?? de fa??on ?? construire l???application module par module (Domain-Driven Design)
                            </p>
                        </div>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Les inconv??nients</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                - Si vous n???avez jamais fait d???angular (ni de TS), il faut un l??ger temps de mont??e en comp??tence pour comprendre la structuration en module d???une application NestJS.
                                <br>
                                - NestJS reste un outil soumis ?? certaines des limites de NodeJs. Les calculs lourds de votre application devront ??tre sans doute ex??cut??s sur un autre type de serveur.
                                <br>
                                -La forte utilisation des d??corateurs, presque abusive, nuit ?? la lisibilit?? du code.
                            </p>
                        </div>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Comparaisons</h2>
                        <div class="col-md-10">
                            <table class="table link_add">
                                <thead>
                                    <tr>
                                        <th scope="col">CARACT??RISTIQUES G??N??RALES</th>
                                        <th scope="col">ExpressJS</th>
                                        <th scope="col">Nest</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td>Derni??re date de sortie</td>
                                        <td>16 novembre 2010</td>
                                        <td>25 octobre 2016</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>55.8k ??toiles</td>
                                        <td> 44.1k ??toiles </td>
                                    </tr>
                                    <tr>
                                        <td>Auteur</td>
                                        <td>TJ Holowaychuck et sa communaut??</td>
                                        <td> Verce </td>
                                    </tr>
                                    <tr>
                                        <td>Gratuit et Open Source</td>
                                        <td>OUI</td>
                                        <td> OUI</td>
                                    </tr>
                                    <tr>
                                        <td>Licence</td>
                                        <td>Licence MIT</td>
                                        <td>Licence MIT</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Ecrit en </td>
                                        <td>JavaScript</td>
                                        <td>JavaScript et TypeScript</td>
                                    </tr>
                                    
                                    <tr>	
                                        <td>Statut de d??veloppement</td>
                                        <td>de D??butant ?? Mature</td>
                                        <td>Mature</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-duration="1000" style="min-height: 100;" class="py-5" id="install">
                        <h1>INSTALLATION</h1>

                        <P class="paragraph">
                            Il vous faudra quelques outils indispensables pour du d??veloppement NestJS en toute tranquillit??.
                        </P>
                        <P class="paragraph">
                            Tout d'abord, vous aurez besoin du runtime node que vous pouvez telecharger <a class="fw-bold " href="https://nodejs.org/en/download/">ici</a>.
                            <br>
                            Fourni avec Node, vous aurez le package npm qui vous permettra d'installer le CLI Nest
                        </p>
                        <h2 class="title py-4"> <span class="next-text-color">#</span> Avec le CLI Nest</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                Le CLI de Nest est indispensable pour cr??er, g??rer et d??ployer les applications NestJS. Installez-le globalement sur votre ordinateur depuis une ligne de commande avec :
                            <div class="alert alert-secondary ms-4" role="alert">
                                $ npm i -g @NestJS/cli
                            </div>
                            </p>
                            <p class="paragraph ms-4">
                                Une fois le CLI de Nest installer, vous disposez de tout hose pour cr??er votre premiere application NestJS.
                                dans un terminal, entrer la commande :

                            <div class="alert alert-secondary ms-4" role="alert">
                                $ nest new nom-du-projet
                            </div>
                            </p>
                            <div>
                                . Demo

                                <div class="col-11 mx-auto">
                                    <img class="w-100" src="public/web/demo/Capture.PNG" alt="">
                                </div>

                                <P class="paragraph">
                                    Apres l'echafaudage, il vous sera demander de choisir un gestionnaire de paquet
                                </p>
                            </div>
                        </div>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Cloner un projet de d??marrage</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                une autre alternative est de cloner un projet de demarage sur git avec la commande:
                            <div class="alert alert-secondary ms-4" role="alert">
                                $ git clone https://github.com/NestJS/typescript-starter.git project
                                <br> $ cd project
                                <br> $ npm install
                                <br> $ npm run start
                            </div>
                            </p>

                            <p class="paragraph ms-4">
                                une fois l'intallation complet dans les deux cas ,
                                Ouvrez votre navigateur et acc??dez ?? <a class="fw-bold " href="http://localhost:3000/">http://localhost:3000/</a>.
                            </p>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-duration="1000" style="min-height: 100;" class="py-5" id="base">
                        <h1>COMPOSANT DE BASE </h1>

                        <h2 class="title py-4"> <span class="next-text-color">- </span> main.ts</h2>
                            <div data-aos="fade-left" class="col-12 text-white">
                                <pre tabindex="0"><code class="">
                                            <span class="keyword">import</span> <span class="punctuation">{</span> NestFactory <span class="punctuation">}</span> <span class="keyword">from</span> <span class="string">'@NestJS/core'</span><span class="punctuation">;</span>
                                            <span class="keyword">import</span> <span class="punctuation">{</span> AppModule <span class="punctuation">}</span> <span class="keyword">from</span> <span class="string">'./app.module'</span><span class="punctuation">;</span><font></font>
                                            <font></font>
                                            <span class="keyword">async</span> <span class="keyword">function</span> <span class="function">bootstrap</span><span class="punctuation">(</span><span class="punctuation">)</span> <span class="punctuation">{</span>
                                              <span class="keyword">const</span> app <span class="operator">=</span> <span class="keyword">await</span> NestFactory<span class="punctuation">.</span><span class="function">create</span><span class="punctuation">(</span>AppModule<span class="punctuation">)</span><span class="punctuation">;</span>
                                              <span class="keyword">await</span> app<span class="punctuation">.</span><span class="function">listen</span><span class="punctuation">(</span><span class="number">3000</span><span class="punctuation">)</span><span class="punctuation">;</span>
                                            <span class="punctuation">}</span>
                                            <span class="function">bootstrap</span><span class="punctuation">(</span><span class="punctuation">)</span><span class="punctuation">;</span>
                                            </code></pre>
                            </div>
                            <p class="paragraph ms-4">
                                main.ts est le point d'entrer de votre application,
                                il utilise la fonction principale NestFactory pour cr??er le serveur web.
                                <br>
                                Le main.ts contient une fonction asynchrone qui lancera Votre application en ??coutant sur le port 3000.
                            </p>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Les controllers</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                Dans NestJS, les contr??leurs sont responsables du traitement des
                                demandes entrantes et de la r??ponse au c??t?? client de l???application..
                            </p>
                        </div>
                        <div class="col-md-10 ms-auto">

                            <h5 class="title py-4"> <span class="next-text-color">- </span> app.controller.spec.ts</h5>
                            <p class="paragraph ms-4">
                                *.controller.spec.ts sont G??n??ralement un fichier de sp??cifications ou de test dans lequel vous ??crivez tous vos cas de test
                                <br>
                                Exemple :
                            </p>
                            <div data-aos="fade-left" class="col-12 text-white">
                                <pre class=" language-typescript" tabindex="0"><code class=" language-typescript">
                                              <span class="function">describe</span><span class="punctuation">(</span><span class="string">'root'</span><span class="punctuation">,</span> <span class="punctuation">(</span><span class="punctuation">)</span> <span class="operator">=&gt;</span> <span class="punctuation">{</span>
                                                <span class="function">it</span><span class="punctuation">(</span><span class="string">'should return "Hello World!"'</span><span class="punctuation">,</span> <span class="keyword">async</span> <span class="punctuation">(</span><span class="punctuation">)</span> <span class="operator">=&gt;</span> <span class="punctuation">{</span>
                                                 <span class="function">expect</span><span class="punctuation">(</span><span class="keyword">await</span> AppController<span class="punctuation">.</span><span class="function">findAll</span><span class="punctuation">(</span><span class="punctuation">)</span><span class="punctuation">)</span><span class="punctuation">.</span><span class="function">toBe</span><span class="punctuation">(</span>result<span class="punctuation">)</span><span class="punctuation">;</span>
                                                <span class="punctuation">}</span><span class="punctuation">)</span><span class="punctuation">;</span>
                                              <span class="punctuation">}</span><span class="punctuation">)</span><span class="punctuation">;</span>
                                            </code>
                                        </pre>
                            </div>
                            <p class="paragraph ms-4">
                                Ce code permet de tester si Nest renvoie <span class="text-danger">hello world</span>
                            </p>

                            <h5 class="title py-4"> <span class="next-text-color">- </span> app.controller.ts</h5>
                            <div data-aos="fade-left" class="col-12 text-white">
                                <pre class="hide language-typescript" tabindex="0"><code class=" language-typescript">
                                            <span class="keyword">import</span> <span class="punctuation">{</span> Controller<span class="punctuation">,</span> Get <span class="punctuation">}</span> <span class="keyword">from</span> <span class="string">'@NestJS/common'</span><span class="punctuation">;</span>
                                            
                                            <span class="decorator"><span class="at operator">@</span><span class="function">Controller</span></span><span class="punctuation">(</span><span class="punctuation">)</span>
                                            <span class="keyword">export</span> <span class="keyword">class</span> <span class="class-name">AppController</span> <span class="punctuation">{</span>
                                              <span class="decorator"><span class="at operator">@</span><span class="function">Get</span></span><span class="punctuation">(</span><span class="punctuation">)</span>
                                              <span class="function">findAll</span><span class="punctuation">(</span><span class="punctuation">)</span> <span class="punctuation">{</span>
                                                <span class="keyword">return</span> <span class="keyword">this<span class="punctuation">.</span></span><span class="string">appService<span class="punctuation">.</span></span><span class="keyword">getHello</span><span class="punctuation">(</span><span class="punctuation">)</span><span class="punctuation">;</span>
                                              <span class="punctuation">}</span>
                                            <span class="punctuation">}</span>
                                            </code></pre>
                            </div>
                            <p class="paragraph ms-4">
                                NestJS d??tect un controller grace au decorateur <span class="text-danger">@Controller</span>
                                <br>
                                Le d??corateur <span class="text-danger">@Get()</span> indique ?? Nest de cr??er un gestionnaire pour un point de terminaison sp??cifique pour les requ??tes HTTP
                            </p>
                        </div>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Les modules</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                Les modules sont utilis??s pour structurer le code et s??parer les fonctionnalit??s en morceaux logiques et r??utilisables.
                            </p>
                        </div>

                        <h2 class="title py-4"> <span class="next-text-color">#</span> Les services</h2>
                        <div class="col-md-10">
                            <p class="paragraph ms-4">
                                Les services permettent d???abstraire la complexit?? et la logique de l???utilisateur. Il est possible d???injecter le service dans des contr??leurs ou d???autres services.
                            </p>
                        </div>
                        

                        <div class="col-md-10 ms-auto">
                            

                            
                            <p class="paragraph ms-4">
                                Ce code permet de tester si Nest renvoie <span class="text-danger">hello world</span>
                            </p>
                            <h5 class="title py-4"> <span class="next-text-color">- </span> app.service.ts</h5>
                            <div data-aos="fade-left" class="col-12 text-white">
                                <pre class="hide language-typescript" tabindex="0"><code class=" language-typescript">
                                            <span class="keyword">import</span> <span class="punctuation">{</span> Injectable<span class="punctuation">,</span> Get <span class="punctuation">}</span> <span class="keyword">from</span> <span class="string">'@NestJS/common'</span><span class="punctuation">;</span>
                                            
                                            <span class="decorator"><span class="at operator">@</span><span class="function">Injectable</span></span><span class="punctuation">(</span><span class="punctuation">)</span>
                                            <span class="keyword">export</span> <span class="keyword">class</span> <span class="class-name">AppService</span> <span class="punctuation">{</span>
                                              <span class="function">getHello</span><span class="punctuation">(</span><span class="punctuation">):<span class="string">string</span></span> <span class="punctuation">{</span>
                                                <span class="keyword">return</span> <span class="string">'Hello World!'</span><span class="punctuation">.</span></span>
                                              <span class="punctuation">}</span>
                                            <span class="punctuation">}</span>
                                            </code></pre>
                            </div>
                            <p class="paragraph ms-4">
                                Dans Nest, en raison de la nature de TypeScript, il est tr??s facile de g??rer les d??pendances inject??es car elles sont r??solues uniquement par type. Dans l'exemple ci-dessus, Nest r??sout le probl??me AppService en cr??ant et en renvoyant une instance appService.
                                <br> Cette d??pendance est r??solue et transmise au constructeur d'AppController :
                                :
                                <br>
                                <br>
                                ce qui permettra d'afficher sur votre page un : <span class="text-success">Hello world</span>
                            </p>

                        </div>

                    </div>

                    <div data-aos="fade-right" data-aos-duration="1000" style="min-height: 100;" class="py-5" id="tuto">
                        <h1>#TUTO# </h1>
                        <p class="paragraph ms-4">
                            je vous invite ?? cloner mon mon repectoire <a class="fw-bold " href="https://github.com/Sanyaronke/veille_techno_nest_js">Git</a> et visiter <a class="fw-bold " href="https://api-support.herokuapp.com/">l'application</a>; ce mini projet vous permet de faire un API Rest avec NestJS
                            <br>
                            ou suivre Mon petit tuto <a class="fw-bold " href="tuto">ici</a>
                        </p>
                        <div class="col-12">
                            <img class="w-100" src="public/web/projet.png" alt="">
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-duration="1000" style="min-height: 100;" class="py-5" id="conclure">
                        <h1>Pour conclure </h1>
                        <p class="paragraph ms-4">
                            NestJS est un framework back-end complet qui a l???intelligence
                            de s???inspirer et d???int??grer beaucoup de concepts
                            qui ont d??j?? fait leurs preuves.
                            <br> Ainsi, son architecture inspir??e d???Angular vous permet
                            de vous concentrer sur votre r??elle valeur ajout??e
                            avec une bonne qualit?? du code produit.
                            Ses principaux atouts ? <br>
                            Il permet de r??aliser des applications scalables, testables et maintenables.
                            Mais il demande ??galement un peu de pratique pour sa bonne prise en main.
                        </p>
                    </div>
                </div>
            </div>
        </div>