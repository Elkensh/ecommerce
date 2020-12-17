<?php

namespace App\Observers;

use App\Models\SubCategories;

class SubCategoryObserver
{
    /**
     * Handle the sub categories "created" event.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return void
     */
    public function created(SubCategories $subCategories)
    {
        //
    }

    /**
     * Handle the sub categories "updated" event.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return void
     */
    public function updated(SubCategories $subCategories)
    {
        //
    }

    /**
     * Handle the sub categories "deleted" event.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return void
     */
    public function deleted(SubCategories $subCategories)
    {
        $subCategories->categories()->delete();
    }

    /**
     * Handle the sub categories "restored" event.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return void
     */
    public function restored(SubCategories $subCategories)
    {
        //
    }

    /**
     * Handle the sub categories "force deleted" event.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return void
     */
    public function forceDeleted(SubCategories $subCategories)
    {
        //
    }
}
