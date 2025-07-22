<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8" id="project-cards-inside">
                <div class="card">
                    <div class="card-header">
                        NRB JOBS LMS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Technology used: PHP+Laravel +Bootstrap+React</h5>
                        <p class="card-text">Github Link : https://github.com/alimulrazi/scholarsbd</p>
                        <a href=" https://dev.scholarsbangladesh.com" class="btn btn-primary">Site Link</a>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        BracLMS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Technology used: PHP+Laravel+React</h5>
                        <p class="card-text"></p>
                        <a href="https://beplms.brac.net" class="btn btn-primary">Site Link</a>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        NRB Conference
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Technology used: PHP+Laravel + Bootstrap+JS</h5>
                        <p class="card-text">Github Link : https://github.com/alimulmars/nrbjobslms</p>
                        <a href="https://dev.nrbconference.com" class="btn btn-primary">Site Link</a>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Scholars Bangladesh
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Technology used: PHP+Laravel +Bootstrap+React</h5>
                        <p class="card-text">Github Link : https://github.com/alimulrazi/scholarsbd</p>
                        <a href=" https://dev.scholarsbangladesh.com" class="btn btn-primary">Site Link</a>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Newsportal
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Technology used: JavaScript+PHP+Bootstrap</h5>
                        <p class="card-text">Github Link : https://github.com/AdnanAlMaruf/Newsportal1</p>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        AI Chatbot
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Python+HTML+CSS</h5>
                        <p class="card-text">Github Link : https://github.com/AdnanAlMaruf/182-115-011-181-115-064</p>
                </div>

            </div>
        </div>
    </div>
</section>


<script>
    const callAllPostApi = async () => {
        document.getElementById('loading-div').classList.remove('d-none');
        const getAllPost = await axios.get('/getAllProjectDetails');
        document.getElementById('loading-div').classList.add('d-none');

        console.log(getAllPost)
        if (getAllPost.status === 200) {
            getAllPost.data.forEach((singleProject) => {
                let singlePost = `<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${singleProject.title}</h2>
                                <p>${singleProject.details}</p>
                            </div>
                            <img class="img-fluid" src= ${singleProject.thumbLink} alt="..." />
                        </div>
                    </div>
                </div>`;

                document.getElementById('project-cards-inside').innerHTML += singlePost;
            })
        }
    }
    callAllPostApi();
</script>
